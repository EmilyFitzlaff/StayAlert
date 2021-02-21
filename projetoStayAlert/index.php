<!doctype html>
<html lang="pt-br">
    <head>
        <?php 
            $title = "Página Principal - Stay Alert";
            include_once('head.php'); 
        ?>
    </head>

    <body>    
        <?php include_once('header-principal.php'); ?>

        <main>
            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <img src="img/logo.png" class="figure-img img-fluid rounded">
                        <h1 class="fw-light">StayAlert</h1>
                        <p class="lead text-muted">Sistema para divulgação de pessoas desaparecidas.</p>
                        <p>
                        <a href="logar.php" class="btn btn-success my-2">Entrar</a>
                        <a href="cadastrar.php" class="btn btn-primary my-2 text-white">Cadastrar-se</a>
                        </p>
                    </div>
                </div>
            </section>
            
            <div class="album py-5 bg-light">
                <div class="container">
                    <h4>Filtrar por:</h4>
                    <br>
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nome</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Pesquisar pelo nome do(a) desaparecido(a)">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Município</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Pesquisar por município">
                    </div>
                    <div class="col-md-4">
                        <label for="inputAddress" class="form-label">Data do Desaparecimento</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="00/00/0000">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Sexo</label>
                        <select id="inputState" class="form-select">
                            <option selected disabled>Escolha uma opção...</option>
                            <option>Feminino</option>
                            <option>Masculino</option>
                            <option>Não Definido</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                    <label for="inputState" class="form-label">Tipo Pessoa</label>
                        <select id="inputState" class="form-select">
                            <option selected disabled>Escolha uma opção...</option>
                            <option>Criança</option>
                            <option>Adolescente</option>
                            <option>Adulto</option>
                        </select>
                    </div>        
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Filtrar</button>
                        <button type="reset" class="btn btn-danger">Limpar Filtros</button>
                    </div>
                </form>
            </div>
        </div>

            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="img/pessoa1.jpg">
                                <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/pessoa2.jpg">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/pessoa3.jpg">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/pessoa4.jpg">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/pessoa5.jpg">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/pessoa6.jpg">

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include_once('footer.php'); ?>