<?php
    require "../bd/Verifica.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Editar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../templates/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../templates/css/style.css"/>
    </head>
    <body>
        <header>
            <!--<h1>Header</h1>-->
            <div class="icon-logo">
                <img src="../templates/imagens/iconPP.png"/>
                <h1>AlmoSystem</h1>
            </div>

            <div class="menu">
                <ul class="nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="item" href="" data-toggle="dropdown" aria-expanded="false">Produtos</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item nav-link" href="menu.php">Cadastrar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item nav-link" href="visualizar-prod.php">Visualizar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="selecionado curva-esquerda item" href="" data-toggle="dropdown" aria-expanded="false">Fornecedores</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item nav-link" href="cadastrar-forn.php">Cadastrar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item nav-link" href="visualizar-forn.php">Visualizar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="item" href="" data-toggle="dropdown" aria-expanded="false">Requisitante</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item nav-link" href="cadastrar-req.php">Cadastrar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item nav-link" href="visualizar-req.php">Visualizar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="item" href="" data-toggle="dropdown" aria-expanded="false">Movimentação de Estoque</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item nav-link" href="movimentacao-est-entrada.php">Entrada</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item nav-link" href="movimentacao-est-saida.php">Saída</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link item" href="relatorios.php">Relatórios</a></li>
                    <li class="nav-item"><a class="nav-link item curva-direita" href="../bd/Sair.php">Sair</a></li>
                </ul>
            </div>
        </header>
        <?php 
            require_once ('../bd/Conexao.php');
            $con = new Conexao();
            $cnpj = $_GET['codf'];
            $sql_f = "SELECT * FROM fornecedores WHERE cnpj = '$cnpj'";
            $result_f = mysqli_query($con->conexao(),$sql_f);
            while($sql_f = mysqli_fetch_array($result_f)){
        ?>
        <section>
            <!--<h1>Section</h1>-->
             <form action="../action/edi-forn.php" method="post">
                <fieldset class="box-form"><legend>Editar Fornecedor</legend>

                    <div class="vertical">
                        <div class="horizontal w20">
                            <p><label for="cCNPJ">CNPJ/CPF:</label>
                            <input type="text" name="tCNPJ" value="<?php echo $sql_f['cnpj'];?>" id="cCNPJ" size="30" readonly/></p>
                        </div>
                        <div class="horizontal w40">
                            <p><label for="cRazao">Razão:</label>
                            <input type="text" name="tRazao" value="<?php echo $sql_f['razao'];?>" id="cRazao" size="30" readonly/></p>
                        </div>
                        <div class="horizontal w40">
                            <p><label for="cNomeFantasia">Nome Fantasia / Apelido:</label> 
                            <input type="text" name="tNomeFantasia" value="<?php echo $sql_f['fantasia'];?>" id="cNomeFantasia" size="30" maxlength="100" placeholder="Digite uma Fantasia ou Apelido" required autofocus/></p>
                        </div>
                    </div>
                    <div class="vertical">
                        <div class="horizontal w25">
                            <p><label for="cEstado">Estado:</label>
                            <input type="text" name="tEstado" value="<?php echo $sql_f['estado'];?>" id="cEstado" size="50" maxlength="40" placeholder="Digite o Estado" required autofocus/></p>
                        </div>
                        <div class="horizontal w20">
                            <p><label for="cCidade">Cidade:</label>
                            <input type="text" name="tCidade" value="<?php echo $sql_f['cidade'];?>" id="cCidade" size="50" maxlength="40" placeholder="Digite a Cidade" required autofocus/></p>
                        </div>
                        <div class="horizontal w40">
                            <p><label for="cEndereco">Endereço:</label>
                            <input type="text" name="tEndereco" value="<?php echo $sql_f['endereco'];?>" id="cEndereco" size="50" maxlength="40" placeholder="Digite o Endereço" required autofocus/></p>
                        </div>
                        <div class="horizontal w15">
                            <p><label for="cTelefone1">Contato:</label> 
                            <input type="text" name="tTelefone1" value="<?php echo $sql_f['contato'];?>" id="cTelefone1" size="50" maxlength="11" placeholder="(99) 9999-9999" required autofocus/></p>
                        </div>
                    </div>
                    </div>
                    <div class="vertical">
                        <div class="horizontal w40">
                            <p><label for="cBanco">Banco:</label>
                            <input type="text" name="tBanco" value="<?php echo $sql_f['banco'];?>" id="cBanco" size="30" maxlength="50" placeholder="Digite o nome do Banco" required autofocus/></p>
                        </div>
                        <div class="horizontal w20">
                            <p><label for="cAgencia">Agência:</label>
                            <input type="text" name="tAgencia" value="<?php echo $sql_f['agencia'];?>" id="cAgencia" size="30" maxlength="11" placeholder="0000" required autofocus/></p>  
                        </div>
                        <div class="horizontal w40">
                            <p><label for="cConta">Conta:</label>
                            <input type="text" name="tConta" value="<?php echo $sql_f['conta'];?>" id="cConta" size="30" maxlength="11" placeholder="000000-0" required autofocus/></p>  
                        </div>
                    </div>

                    <div class="vertical">
                        <div class="horizontal w20">
                            <p><label for="cDataCadastramento">Data de Cadastramento:</label>
                            <input type="text" name="tDataCadastramento" value="<?php echo $sql_f['datacadastramento'];?>" id="cDataCadastramento" size="30" readonly/></p>
                        </div>
                        <div class="horizontal w40">
                            <p><label for="cEmail">E-mail:</label>
                            <input type="text" name="tEmail" value="<?php echo $sql_f['email'];?>" id="cEmail" size="30" maxlength="40" placeholder="example@gmail.com" /></p>  
                        </div>
                        <div class="horizontal w40">
                            <p><label for="cSite">Site:</label>
                            <input type="text" name="tSite" value="<?php echo $sql_f['site'];?>" id="cSite" size="30" maxlength="40" placeholder="www.example.com.br" /></p>  
                        </div>
                    </div>
                </fieldset>
                
                <fieldset><legend>Observções</legend>
                    <p><label for="cMsg">Mensagem:</label>
                        <textarea name="tMsg" id="cMsg" cols="100" rows="5" placeholder="Deixa a sua mensagem"><?php echo $sql_f['mensagem'];?></textarea></p>
                        <div class="box-right">
                            <input class="w50 verde" type="submit" value="Salvar"/>
                        </div>
                </fieldset>
            </form>
        </section>
        <?php } ?>
        <footer>
            <!--<h1>Footer</h1>-->
            <p>&copy 2019</p>
        </footer>
        <script src="../templates/bootstrap/assets/js/vendor/jquery-slim.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
                $('[data-toggle="popover"]').popover()
            })
        </script>
        <script src="../templates/bootstrap/assets/js/vendor/popper.min.js"></script>
        <script src="../templates/bootstrap/js/bootstrap.min.js" ></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
    </body>
</html>
