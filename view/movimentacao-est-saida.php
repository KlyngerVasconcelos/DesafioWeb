<?php
    require "../bd/Verifica.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Saída</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../templates/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../templates/css/style.css"/>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    </head>
    <body>
        <script type='text/javascript'>
            $(document).ready(function(){
                $("input[name='codigo_produto']").blur(function(){
                    var $descricao = $("input[name='descricao']");
                    $.getJSON('../bd/function.php',{ 
                        codigo_produto: $( this ).val() 
                    },function( json ){
                        $descricao.val( json.descricao );
                    });
                });
            });
        </script>
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
                        <a class="item" href="" data-toggle="dropdown" aria-expanded="false">Requisitante</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item nav-link" href="cadastrar-req.php">Cadastrar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item nav-link" href="visualizar-req.php">Visualizar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="selecionado curva-esquerda item" href="" data-toggle="dropdown" aria-expanded="false">Movimentação de Estoque</a>
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
            
            $sql_r = "SELECT * FROM requisitante";
            $result_r = mysqli_query($con->conexao(),$sql_r) or die(mysqli_error());
        ?>
        <section>
            <!--<h1>Section</h1>-->
             <form action="../action/mov-saida.php" method="post">
                <fieldset class="box-form"><legend>Saida do Estoque</legend>
                    <div class="vertical">
                        <div class="horizontal w40">
                            <p><label for="cMicro">Requisitante:</label>
                                <select class="" id="cMicro" name="tMicro" placeholder="Nome do requisitante">
                                    <?php while($sql_r = mysqli_fetch_array($result_r)) { ?>
                                        <option value="<?php echo $sql_r['codigo_requisitante']; ?>">
                                            <?php echo $sql_r['nome']; ?>
                                        </option>
                                        <?php } ?>
                                </select></p>
                        </div>
                        <div class="horizontal w33">
                            <p><label for="cReferencia">Departamento:</label>
                                <input type="text" name="tDepartamento" id="cDepartamento" size="30" maxlength="50" placeholder="Digite a referência" required autofocus/></p>
                            </div>
                        <div class="horizontal w33">
                            <p><label for="cUnidade">Data:</label>
                            <input type="date" name="tData" id="cData" size="100" maxlength="200" placeholder="Digite a unidade" /></p>
                        </div>
                        </div>
                    </div>
                    <div class="vertical">
                        <div class="horizontal w30">
                            <p><label for="cCodigo">Código do Produto:</label> 
                            <input type="text" name="codigo_produto" id="codigo_produto" size="30" maxlength="11" placeholder="Digite o código" required autofocus/></p>
                        </div>
                        <div class="horizontal w50">
                            <p><label for="cDesProduto">Produto:</label> 
                            <input type="text" name="descricao" id="descricao" size="30" maxlength="40" readonly/></p>
                        </div>
                        <div class="horizontal w33">
                            <p><label for="cUnidade">Unidade:</label>
                            <input type="number" name="tUnidade" id="cUnidade" size="100" min="1" placeholder="Digite a unidade" required autofocus/></p>
                        </div>
                    </div>
                    
                </fieldset>
                <div class="box-right">
                    <input class="w50 verde" type="submit" value="Salvar"/>
                    <input class="w50 vermelho" type="reset" value="Limpar"/>
                </div>                
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
        <script type="text/javascript" src="../templates/js/adc.js"></script>
    </body>
</html>