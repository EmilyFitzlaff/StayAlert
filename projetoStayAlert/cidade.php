<!doctype html>
<html lang="pt-br">
    <head>
        <?php 
            $title = "Consultar Cidade - Stay Alert";
            include_once('head.php'); 
        ?>
    </head>

    <body>    
        <?php 
            include_once('header-principal.php');
            include_once('class/class_cidade.php');
            include_once('class/class_connection.php'); 
        ?>

        <main>
            <div class="container">
            <br>
            <h3>Consultar Cidades</h3>
            <br>
                <?php
                    $pessoa = new Cidade();
                    $pessoa->CreateTable();
                ?>
            </div>  
        </main>

        <?php include_once('footer.php'); ?>