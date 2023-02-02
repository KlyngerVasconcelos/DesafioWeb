<?php
    require "../bd/Verifica.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar</title>
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
                        <a class="selecionado curva-esquerda item" href="" data-toggle="dropdown" aria-expanded="false">Produtos</a>
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
            
            $sql_f = "SELECT * FROM fornecedores";
            $result_f = mysqli_query($con->conexao(),$sql_f) or die(mysqli_error());
        ?>
        <section>
            <!--<h1>Section</h1>-->
             <form action="../action/cad-prod.php" method="post">
                <fieldset class="box-form"><legend>Novo Produto</legend>

                    <div class="vertical">
                        <div class="horizontal w40">
                            <p><label for="cCodigo">Código:</label>
                            <input type="number" name="tCpdigo" id="cCodigo" size="30" min="1" max="10000000000" placeholder="Digite o código" required autofocus/></p>
                        </div>
                        <div class="horizontal w40">
                            <p><label for="cDesProduto">Descrição do Produto:</label> 
                            <input type="text" name="tDesProduto" id="cDesProduto" size="30" maxlength="50" placeholder="Digite a descrição do produto" required autofocus/></p>
                        </div>
                        <div class="horizontal w20">
                            <p><label for="cUnidade">Unidade:</label>
                            <input type="number" name="tUnidade" id="cUnidade" size="100" min="1" max="1000" placeholder="Digite a unidade" required autofocus /></p>
                        </div>
                    </div>
                    <div class="vertical">
                        <div class="horizontal w20">
                            <p><label for="cQuantidade">Quantidade:</label>
                            <input type="number" name="tQuantidade" id="cQuantidade" size="100" min="1" placeholder="Digite a quantidade" required autofocus /></p>
                        </div>
                        <div class="horizontal w40">
                            <p><label for="cGrupoProduto">Grupo de Produtos:</label> 
                            <input type="text" name="tGrupProduto" id="cGrupProduto" size="30" maxlength="50" placeholder="Digite o grupo do produto" required autofocus/></p>
                        </div>
                        <div class="horizontal w40">
                            <p><label for="cSubGrupo">Subgrupo de Produto:</label>
                            <input type="text" name="tSubGrupo" id="cSubGrupo" size="30" maxlength="50" placeholder="Digite o subgrupo do produto"/></p>
                        </div>
                    </div>
                    <div class="vertical">
                        <div class="horizontal w50">
                            <p><label for="cReferencia">Referência:</label>
                            <input type="text" name="tReferncia" id="cReferencia" size="30" maxlength="50" placeholder="Digite a referência"/></p>
                        </div>
                        <div class="horizontal w50">
                            <p><label for="cCodigoBarra">Código de Barra:</label>
                            <input type="text" name="tCodigoBarra" id="cCodigoBarra" size="30" maxlength="11" placeholder="Digite o código de barra" required autofocus/></p>
                        </div>
                    </div>
                    <div class="vertical">
                        <div class="horizontal w40">
                            <p><label for="cPossLote">Possui Lote e Validação?:</label>
                            <input type="text" name="tPossLote" id="cPossLote" size="30" maxlength="15" placeholder="Digite" required autofocus/></p>
                        </div>
                        <div class="horizontal w40">
                            <p><label for="cMicro">Nome da Micro Empresa:</label>
                                <select class="form-control" id="cMicro" name="tMicro" placeholder="Digite nome da micro empresa">
                                    <?php while($sql_f = mysqli_fetch_array($result_f)) { ?>
                                        <option value="<?php echo $sql_f['cnpj']; ?>">
                                            <?php echo $sql_f['razao']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            <!-- <input type="text" name="tMicro" id="cMicro" size="30" maxlength="50" placeholder="Digite nome da micro empresa" required autofocus/></p> -->
                        </div>
                        <div class="horizontal w20">
                            <p><label for="cAtivo">Ativo/Inativo:</label>
                            <select name="sit">
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="vertical">
                        
                        <div class="horizontal w33">
                            <p><label for="cEstoqueMinimo">Estoque Minimo:</label>
                            <input type="number" name="tEstoqueMinimo" id="cEstoqueMinimo" size="30" min="1" placeholder="Digite o estoque minimo" required autofocus/></p>
                        </div>
                        <div class="horizontal w33">
                            <p><label for="cEstoqueMaximo">Estoque Maximo:</label>
                            <input type="number" name="tMaximo" id="cMaximo" size="30" min="1" max="1000" placeholder="Digite o estoque maximo" required autofocus/></p>
                        </div>
                        <div class="horizontal w33">
                            <p><label for="cMedio">Custo Medio:</label>
                            <input type="text" name="tMedio" id="cMedio" size="30" maxlength="15" placeholder="Digite o custo medio" required autofocus/></p>  
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
