<?php
    require "../bd/Verifica.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Visualizar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../templates/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
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
        
        <section>
            <div class="content-sobre container">
                <div class="card">
                    <h5 class="card-header">Lista de Produtos</h5>
                    <div class="card-body">
                        <fieldset>
                            <!-- <fieldset class="box-form"><legend>Lista de Produtos</legend> -->
                                <!--<h1>Section</h1>-->
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Descrição do Produto</th>
                                                <th>Unidade</th>
                                                <th>Quantidade</th>
                                                <th>Grupo</th>
                                                <th>Subgrupo</th>
                                                <th>Referência</th>
                                                <th>Código de Barra</th>
                                                <th>Lote e Validação</th>
                                                <th>Micro Empresa</th>
                                                <th>Situação</th>
                                                <th>Estoque Minimo</th>
                                                <th>Estoque Maximo</th>
                                                <th>Custo Medio</th>
                                                <th>Mensagem</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require_once ('../bd/Conexao.php');
                                            $con = new Conexao();
                                            $sql_p = "SELECT * FROM produtos ORDER BY `produtos`.`descricao` ASC ";
                                            $result_p = mysqli_query($con->conexao(),$sql_p) or die(mysqli_error());
                                            while($sql_p = mysqli_fetch_array($result_p)){
                                                ?>
                                                <tr>
                                                    <td> <?php echo $sql_p['codigo_produto']; ?></td>
                                                    <td> <?php echo $sql_p['descricao']; ?></td>
                                                    <td> <?php echo $sql_p['unidade']; ?></td>
                                                    <td> <?php echo $sql_p['quantidade']; ?></td>
                                                    <td> <?php echo $sql_p['gruproduto']; ?></td>
                                                    <td> <?php echo $sql_p['subgrupo']; ?></td>
                                                    <td> <?php echo $sql_p['referencia']; ?></td>
                                                    <td> <?php echo $sql_p['codigobarra']; ?></td>
                                                    <td> <?php echo $sql_p['lote']; ?></td>
                                                    <td> <?php echo $sql_p['micro']; ?></td>
                                                    <td> <?php echo $sql_p['situacao']; ?></td>
                                                    <td> <?php echo $sql_p['estminimo']; ?></td>
                                                    <td> <?php echo $sql_p['estmaximo']; ?></td>
                                                    <td> <?php echo $sql_p['estmedio']; ?></td>
                                                    <td> <?php echo $sql_p['mensagem']; ?></td>
                                                    <td>
                                                        <a href="atualizar-prod.php?codp=<?php echo $sql_p['codigo_produto']; ?>" class="icons"><i class="fa fa-edit" title="Editar Produto"></i></a>                                 

                                                        <a href="../action/rem-prod.php?codp=<?php echo $sql_p['codigo_produto']; ?>" onclick="return confirm('Tem certeza que deseja remover este Produto?')" class="icons"><i class="fa fa-trash" title="Remover Produto"></i></a></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
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
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" ></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
                    }
                });
            } );
        </script>
    </body>
</html>
