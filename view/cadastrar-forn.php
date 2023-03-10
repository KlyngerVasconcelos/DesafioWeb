<?php
    require "../bd/Verifica.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar Fornecedor</title>
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
                        <a class="item" href="" data-toggle="dropdown" aria-expanded="false">Movimenta????o de Estoque</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item nav-link" href="movimentacao-est-entrada.php">Entrada</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item nav-link" href="movimentacao-est-saida.php">Sa??da</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link item" href="relatorios.php">Relat??rios</a></li>
                    <li class="nav-item"><a class="nav-link item curva-direita" href="../bd/Sair.php">Sair</a></li>
                </ul>
            </div>
        </header>
        
        <section>
            <!--<h1>Section</h1>-->
             <form action="../action/cad-forn.php" method="post">
                <fieldset class="box-form"><legend>Novo Fornecedor</legend>

                    <div class="vertical">
                        <div class="horizontal w20">
                            <p><label for="cCNPJ">CNPJ / CPF:</label>
                            <input type="text" name="tCNPJ" id="cCNPJ" size="30" maxlength="11" placeholder="Digite o CNPJ" required autofocus/></p>
                        </div>
                        <div class="horizontal w40">
                            <p><label for="cRazao">Raz??o:</label>
                            <input type="text" name="tRazao" id="cRazao" size="30" maxlength="100" placeholder="Digite a raz??o" required autofocus/></p>
                        </div>
                        <div class="horizontal w40">
                            <p><label for="cNomeFantasia">Nome Fantasia / Apelido:</label> 
                            <input type="text" name="tNomeFantasia" id="cNomeFantasia" size="30" maxlength="100" placeholder="Digite uma Fantasia ou Apelido" required autofocus/></p>
                        </div>
                    </div>
                    <div class="vertical">
                        <div class="horizontal w25">
                            <p><label for="cEstado">Estado:</label>
                            <input type="text" name="tEstado" id="cEstado" size="50" maxlength="40" placeholder="Digite o Estado" required autofocus/></p>
                        </div>
                        <div class="horizontal w20">
                            <p><label for="cCidade">Cidade:</label>
                            <input type="text" name="tCidade" id="cCidade" size="50" maxlength="40" placeholder="Digite a Cidade" required autofocus/></p>
                        </div>
                        <div class="horizontal w40">
                            <p><label for="cEndereco">Endere??o:</label>
                            <input type="text" name="tEndereco" id="cEndereco" size="50" maxlength="40" placeholder="Digite o Endere??o" required autofocus/></p>
                        </div>
                        <div class="horizontal w15">
                            <p><label for="cTelefone1">Contato:</label> 
                            <input type="text" name="tTelefone1" id="cTelefone1" size="50" maxlength="11" placeholder="(99) 9999-9999" required autofocus/></p>
                        </div>
                    </div>
                    </div>
                    <div class="vertical">
                        <div class="horizontal w40">
                            <p><label for="cBanco">Banco:</label>
                            <input type="text" name="tBanco" id="cBanco" size="30" maxlength="50" placeholder="Digite o nome do Banco" required autofocus/></p>
                        </div>
                        <div class="horizontal w20">
                            <p><label for="cAgencia">Ag??ncia:</label>
                            <input type="text" name="tAgencia" id="cAgencia" size="30" maxlength="11" placeholder="0000" required autofocus/></p>  
                        </div>
                        <div class="horizontal w40">
                            <p><label for="cConta">Conta:</label>
                            <input type="text" name="tConta" id="cConta" size="30" maxlength="11" placeholder="000000-0" required autofocus/></p>  
                        </div>
                    </div>

                    <div class="vertical">
                        <div class="horizontal w20">
                            <p><label for="cDataCadastramento">Data de Cadastramento:</label>
                            <input type="date" name="tDataCadastramento" id="cDataCadastramento" size="30"/></p>
                        </div>
                        <div class="horizontal w40">
                            <p><label for="cEmail">E-mail:</label>
                            <input type="text" name="tEmail" id="cEmail" size="30" maxlength="40" placeholder="example@gmail.com" /></p>  
                        </div>
                        <div class="horizontal w40">
                            <p><label for="cSite">Site:</label>
                            <input type="text" name="tSite" id="cSite" size="30" maxlength="40" placeholder="www.example.com.br" /></p>  
                        </div>
                    </div>
                    
                    
                </fieldset>
                
                <fieldset><legend>Observa????es</legend>
                    <p><label for="cMsg">Mensagem:</label>
                        <textarea name="tMsg" id="cMsg" cols="100" rows="5" placeholder="Deixa a sua mensagem"></textarea></p>
                        <div class="box-right">
                            <input class="w50 verde" type="submit" value="Salvar"/>
                            <input class="w50 vermelho" type="reset" value="Limpar"/>
                        </div>
                </fieldset>
            </form>
        </section>
        
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
