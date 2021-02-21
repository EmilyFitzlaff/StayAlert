<!doctype html>
<html lang="pt-br">
    <head>
        <?php 
            $title = "Efetuar Login - Stay Alert";
            include_once('head.php'); 
        ?>
    </head>

    <body>    
        <?php include_once('header-principal.php'); ?>
        <main>
            <div class="album py-5 bg-light">
                <div class="container"> 
                    <div class="card" style=" margin: 40px auto;"> 
                        <div class="card-header" style=" background-color: #227C9D;">
                            <strong class="text-white">Cadastrar</strong>
                        </div>
                        <div class="card-body">
                            <form class="row g-3">
                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Nome Completo</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Exemplo: José da Silva">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">CPF</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="Exemplo: 000.000.000-00">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputAddress" class="form-label">Data de Nascimento</label>
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
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">E-mail</label>
                                    <input type="mail" class="form-control" id="inputAddress2" placeholder="Exemplo: usuario@dominio.com.br">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputCity" class="form-label">Telefone Celular</label>
                                    <input type="phone" class="form-control" id="inputCity" placeholder="(00) 0000 0000">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputCity" class="form-label">Telefone Residencial</label>
                                    <input type="phone" class="form-control" id="inputCity" placeholder="(00) 0000 0000">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputCity" class="form-label">Telefone Comercial</label>
                                    <input type="phone" class="form-control" id="inputCity" placeholder="(00) 0000 0000">
                                </div>  
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Concordo com os termos de uso
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                    <button type="reset" class="btn btn-danger">Limpar dados</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include_once('footer.php'); ?>