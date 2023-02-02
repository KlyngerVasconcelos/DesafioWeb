<?php
    require "../bd/Verifica.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar requisitante</title>
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
                        <a class="item" href="" data-toggle="dropdown" aria-expanded="false">Fornecedores</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item nav-link" href="cadastrar-forn.php">Cadastrar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item nav-link" href="visualizar-forn.php">Visualizar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="selecionado curva-esquerda item" href="" data-toggle="dropdown" aria-expanded="false">Requisitante</a>
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

        <section>
            <!--<h1>Section</h1>-->
             <form action="../action/cad-req.php" method="post">
                <fieldset class="box-form"><legend>Novo Requisitante</legend>

                    <div class="vertical">
                        <div class="horizontal w25">
                            <p><label for="cCodigo">Código:</label>
                            <input type="text" name="tCpdigo" id="cCodigo" size="30" maxlength="11" placeholder="Digite o código" required autofocus/></p>
                        </div>
                        
                        <div class="horizontal w75">
                            <p><label for="cDesProduto">Nome:</label> 
                            <input type="text" name="tNome" id="cNome" size="30" maxlength="50" placeholder="Digite o nome" required autofocus/></p>
                        </div>
                    </div>
                    </div>
                    <div class="vertical">
                        <div class="horizontal w50">
                            <p><label for="cCustoMedio">Local:</label>
                            <input type="text" name="tLocal" id="cLocal" size="30" maxlength="80" placeholder="Digite o local" required autofocus/></p>
                        </div>
                        <div class="horizontal w50">
                            <p><label for="cReferencia">Departamento:</label>
                            <input type="text" name="tDepartamento" id="cDepartamento" size="30" maxlength="50" placeholder="Digite a referência" required autofocus/></p>
                        </div>
                    </div>
                </fieldset>
                
                <fieldset><legend>Observações</legend>
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
