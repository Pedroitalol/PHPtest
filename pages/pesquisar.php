<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa no banco de dados.</title>
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
    <h2>Área do administrador.</h2>
    <form method="post"><label>Cep:
        <input name="cep" class="form-control" aria-label="default input example" type="text" id="cep" value="" size="10" maxlength="9"
            onblur="pesquisacep(this.value);" />
        </label><br />
        <input type="submit" name="acao" value="Verificar no banco de dados!" class="btn btn-primary">
        <input type="hidden" name="ver" value="ver"/>
    </form>

    <?php
        // Execução das querys no banco de dados:
        if(isset($_POST["ver"])){
            echo $_POST["cep"];
        }
    ?>
    
    <?php
        include("includes/footer.php");
    ?>

</body>
</html>