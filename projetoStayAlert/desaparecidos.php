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
           //include_once('class/class_connection.php'); 
        ?>
        <main>   
            <div class="container">       
                <br>
                <h3 class="display-8">Desaparecidos</h3>
                <a href="cadastrar_desaparecido.php" class="btn btn-danger">Cadastrar Desaparecido</a>
                <br><br>
                <?php
                    //$Desaparecido = new Desaparecido();
                    //$Desaparecido->CreateTable();
                ?>
               
            </div>          
        </main>
        <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="img/pessoa1.jpg" width=220px height=190px>
                                <div class="card-body">
                                <p class="card-text">Nome: Alice</p>
                                <p class="card-text">Idade: 16 anos</p>
                                <p class="card-text">Data de desaparecimento: 24/01/2017</p>
                                <p class="card-text">Cidade: Brusque</p>
                                <p class="card-text">Observações: Alice estava no shopping Center no dia de seu desaparecimento</p>
                                <button type="submit" class="btn  btn-block" style="background-color: #227C9D; color: white;" value="entrar" name="acao">Encontrado</button>
                                <div class="d-flex justify-content-between align-items-center">   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/pessoa2.jpg" width=220px height=190px>
                            <div class="card-body">
                                <p class="card-text">Nome: Pedro</p>
                                <p class="card-text">Idade: 20 anos</p>
                                <p class="card-text">Data de desaparecimento: 01/06/2019</p>
                                <p class="card-text">Cidade: Rio do Sul</p>
                                <p class="card-text">Observações: Pedro vestia uma camiseta listrada e calça preta no dia do desaparecimento</p>
                                <button type="submit" class="btn  btn-block" style="background-color: #227C9D; color: white;" value="entrar" name="acao">Encontrado</button>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/pessoa3.jpg" width=220px height=190px>
                            <div class="card-body">
                                <p class="card-text">Nome: Beatriz</p>
                                <p class="card-text">Idade: 9 anos</p>
                                <p class="card-text">Data de desaparecimento: 18/12/2019</p>
                                <p class="card-text">Cidade: Florianópolis</p>
                                <p class="card-text">Observações: Beztriz saiu para brincar no parque das Árvores no dia de seu desaparecimento</p>
                                <button type="submit" class="btn  btn-block" style="background-color: #227C9D; color: white;" value="entrar" name="acao">Encontrado</button> 
                                
                            </div>
                        </div>
                    </div>

        <?php include_once('footer.php'); ?>
    </body>
</html>