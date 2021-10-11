<?php
    include_once("functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de endereço.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</head>
<body>
    
    <?php
        // Função para conectar no banco de dados:
        $pdo;
        try{
            $pdo = new \PDO("mysql:host=localhost; dbname=teste", "root", 
            '', array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        }catch(Excepion $e){
            echo "Erro ao conectar no servidor";
            error_log($e->getMensage());
        }

    ?>
    <?php
        include("includes/navbar.php");
    ?>

    <div class="container">
        <h2>Por favor, digite seu cep:</h2>


        <div class="container">
            <!-- Inicio do formulario -->
            <form method="post" action=".">
                <label>CEP:
                <input name="cep" class="form-control" aria-label="default input example" type="text" id="cep" value="" 
                size="10" maxlength="9" onblur="pesquisacep(this.value);" placeholder="CEP" />
                </label><br />
                <input type="submit" name="acao" value="Pesquisar CEP." class="btn btn-primary">
                <input type="hidden" name="ver" value="ver"/>
                <br>
            </form>
        </div>
        <!-- ->prepare("INSERT INTO ceps VALUES (null, 63122105, "Rua Doutor Antônio Nirson Monteiro", "Santa Luzia", "Crato", "CE", 2304202)"); -->
        <!-- ->prepare("SELECT email FROM usuarios WHERE email = ?"); -->
        <?php
            $flag = false;
            
            if(isset($_POST["ver"]) && isset($_POST["cep"])){
                
                $cep = $_POST["cep"];
                $cep = str_replace('-','',$cep);

                if(strlen($cep) != 8) $flag = true;

                $verifica = $pdo->prepare("SELECT * FROM ceps WHERE cep = ?");
                $verifica->execute(array($cep));
                
                
                if($verifica->rowCount() == 1 && !$flag){
                    // Informações pegas no banco de dados:
                    $infos = $verifica->fetchAll();
                    echo "<h4>Informações adquiridas no Banco de Dados:</h4>";
                    mostrarElegantemente($infos[0][1], $infos[0][2], $infos[0][3], $infos[0][4], $infos[0][5], 
                        $infos[0][6]);
                    $flag = true;
                }else if(!$flag){
                    $url = "https://viacep.com.br/ws/".$cep."//xml/";
                    $xml = file_get_contents($url);
                    // Informações pegas na API:
                    $infos = simplexml_load_string($xml);
                    if(!isset($infos->erro)){
                        echo "<h4>Informações adquiridas na API:</h4>";
                        mostrarElegantemente($infos->cep, $infos->logradouro, $infos->bairro, $infos->localidade, 
                            $infos->uf, $infos->ibge);
                        $flag = true;
                        $infos->cep = str_replace('-','',$infos->cep);
        
                        // Add ao Banco de dados:
                        inserirBanco($infos, $pdo);
                    }else{
                        // To do: imprimir o erro de forma correta
                        echo "<h3>CEP não existe!</h3>";

                    }
                }else{
                    echo "<h3>Por favor digite um CEP válido!</h3>";    
                }
            }else if(isset($_POST["ver"]) && isset($_POST["cep"]) && !$flag){
                echo "<h3>Por favor digite um CEP válido!</h3>";
            }else{
                include("includes/tutorial.php");
            }
            
        ?>
    </div>    
            
    
    <?php
        include("includes/footer.php");
    ?>
</body>
</html>
