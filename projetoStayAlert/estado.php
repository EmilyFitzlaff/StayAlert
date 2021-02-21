<!doctype html>
<html lang="pt-br">
    <head>
        <?php 
            $title = "Consultar Estados - Stay Alert";
            include_once('head.php'); 
        ?>
    </head>

    <body>    
        <?php 
            include_once('header_interno.php');
            include_once('class/class_estado.php');
            include_once('class/class_connection.php'); 
        ?>

        <main>
            <div class="container">
                <br>
                <h3>Consultar Estados</h3>
                <br>
                <?php
                    $pessoa = new Estado();
                    $pessoa->CreateTable();
                ?>
            </div>  
        </main>

        <?php include_once('footer.php'); ?>
    </body>
</html>