<!doctype html>
<html lang="pt-br">
    <head>
        <?php 
            $title = "Consultar Pessoas - Stay Alert";
            include_once('head.php'); 
        ?>
    </head>

    <body>    
        <?php 
            include_once('header-principal.php');
            include_once('class/class_pessoa.php');
            include_once('class/class_connection.php'); 
        ?>

        <main>
            <div class="container">
            <br>
            <h3>Consultar Pessoas</h3>
            <br>
                <?php
                    $pessoa = new Pessoa();
                    $pessoa->CreateTable();
                ?>
            </div>  
        </main>

        <?php include_once('footer.php'); ?>