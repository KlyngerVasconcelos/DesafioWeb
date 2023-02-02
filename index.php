<!DOCTYPE html>
    <!-- <?php require("bd/conexao.php"); ?> -->
<html>
    <head>
        <title>login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="templates/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="templates/css/style.css"/>
        <script  src="templates/bootstrap/js/bootstrap.min.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script type="text/javascript" src="templates/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var $seuCampoCpf = $("#cpf");
                $seuCampoCpf.mask('000.000.000-00', {reverse: true});
            });
        </script>
    </head>
    <body>
        <header>
            <!--<h1>Header</h1>-->
            <div class="icon-logo">
                <img src="templates/imagens/iconPP.png"/>
                <h1>AlmoSystem</h1>
            </div>
        </header>
        
        <section>
            <!--<h1>Section</h1>-->    
            <div class="box-login-back">
                <img class="icon-login" src="templates/imagens/inco1.png"/>
                <div class="box-login">
                   
					<form action="bd/Valida.php" method="post">   
					<h1>Login</h1>
						CPF
						<input type="text" name="cpf" pattern=".{14,}" title="preencha os 11 caracteres." placeholder="Digite seu CPF" id="cpf" required autofocus>
						Senha
						<input type="password" name="senha" placeholder="Digite sua Senha" required>
                        <input type="submit" value="Entrar">
                    </form>
                </div>
            </div>
        </section>
        <footer>
            <!--<h1>Footer</h1>-->
            <p>&copy 2019</p>
        </footer>
    </body>
</html>
