<?php
    session_start();
    date_default_timezone_set("America/Sao_Paulo");

    if(isset($_GET["pesquisar"]) && $_GET["pesquisar"] == "on"){
        include("pages/pesquisar.php");
    }else if(isset($_GET["sobre"]) && $_GET["sobre"] == "on"){
        include("pages/sobre.php");
    }else{
        include("pages/home.php");
    }


?>