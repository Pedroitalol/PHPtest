<?php
    function inserirBanco($objeto, $pdo){
        $inserir = $pdo->prepare('INSERT INTO ceps VALUES (null, ?, ?, ?, ?, ?, ?)');
        $inserir->execute(array($objeto->cep, $objeto->logradouro, $objeto->bairro, $objeto->localidade,
            $objeto->uf, $objeto->ibge));
    }

    function mostrarElegantemente($cep, $rua, $bairro, $cidade, $uf, $ibge){
        ?>
        <div>
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">Informações do endereço:</li>
                <li class="list-group-item">CEP: <?php echo $cep ?> </li>
                <li class="list-group-item"><?php echo $rua ?></li>
                <li class="list-group-item">Bairro: <?php echo $bairro ?></li>
                <li class="list-group-item">Cidade: <?php echo $cidade ?></li>
                <li class="list-group-item">UF: <?php echo $uf ?></li>
                <li class="list-group-item">IBGE: <?php echo $ibge ?></li>
            </ul>
        </div>
        <?php

    }
?>