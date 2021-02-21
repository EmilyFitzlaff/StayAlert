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
                    <div class="card" style="max-width: 25rem; margin: 40px auto;"> 
                        <div class="card-header" style=" background-color: #227C9D;">
                            <strong class="text-white">LOGIN</strong>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="autenticacao.php">
                                <div class="form-group">
                                    <label for="login">E-mail</label>
                                    <input type="mail" class="form-control" id="login" placeholder="Exemplo: usuario@gmail.com" name="login" required maxlength="15">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="senha">Senha</label>
                                    <input type="password" class="form-control" id="senha" placeholder="*********" name="senha" required>
                                </div>
                                <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                                    <div class="text-danger">
                                        Usuário ou senha inválido(s)!
                                    </div>
                                <?php } ?>
                                <br>
                                <button type="submit" class="btn  btn-block" style="background-color: #227C9D; color: white;" value="entrar" name="acao">Entrar</button>
                            </form>
                            <br>
                            <p>Não possui conta? <a href="cadastrar.php">Cadastre-se!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include_once('footer.php'); ?>