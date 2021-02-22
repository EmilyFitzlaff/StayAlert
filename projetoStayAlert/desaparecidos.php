<!doctype html>
<html lang="pt-br">
    <head>
        <?php 
            $title = "Consultar Desaparecidos - Stay Alert";
            include_once('head.php'); 
        ?>
    </head>

    <body>    
        <?php 
            include_once('header_interno.php');
            include_once('class/class_pessoa.php');
            include_once('class/class_cidade.php');
            include_once('class/class_desaparecido.php');
            include_once('class/class_connection.php'); 
        ?>

        <main>   
            <div class="container">       
                <br>
                <h3 class="display-8">Desaparecidos</h3>
                <a href="cadastrar_desaparecido.php" class="btn btn-danger">Cadastrar Desaparecido</a>
                <br><br>
                <?php
                    $Desaparecido = new Desaparecido();
                    $Desaparecido->CreateTable();
                ?>
               
            </div>          
        </main>

        <?php include_once('footer.php'); ?>
    </body>
</html>