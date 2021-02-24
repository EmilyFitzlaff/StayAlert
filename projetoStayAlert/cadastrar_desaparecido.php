<!doctype html>
<html lang="pt-br">
    <head>
        <?php 
            $title = "Cadastrar Desaparecidos - Stay Alert";
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
            <div class="album py-5 bg-light">
                <div class="container"> 
                    <div class="card" style=" margin: 40px auto;"> 
                        <div class="card-header" style=" background-color: #227C9D;">
                            <strong class="text-white">Cadastrar Desaparecido</strong>
                        </div>
                        <div class="card-body">
                            <form class="row g-3">
                                <div class="col-md-8">
                                    <label for="inputEmail4" class="form-label">Nome Completo</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Exemplo: José da Silva">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputAddress" class="form-label">Data de Desaparecimento</label>
                                    <input type="date" class="form-control" id="inputAddress" placeholder="00/00/0000">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Estado</label>
                                    <select id="inputState" class="form-select">
                                        <option selected disabled>Escolha uma opção...</option>
                                        <option>Feminino</option>
                                        <option>Masculino</option>
                                        <option>Não Definido</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputAddress" class="form-label">Cidade</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Informe sua cidade">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Observações</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Informe a roupa que a pessoa estava utilizando, último lugar visto, etc..."></textarea>
                                </div>
                                                                
                                

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Selecione arquivos</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-success">Cadastrar Desaparecido</button>
                                    <button type="reset" class="btn btn-danger">Limpar dados</button>
                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('footer.php'); ?>
    </body>
</html>