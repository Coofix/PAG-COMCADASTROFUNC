<?php

    include("php/conexao.php");

    $sql_code = "SELECT * FROM CLIENTE";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
    $linha = $sql_query->fetch_assoc();
    
            
    


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cadastro Paciente</title>

    <!-- Common plugins -->
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/simple-line-icons/simple-line-icons.css" rel="stylesheet">
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="plugins/pace/pace.css" rel="stylesheet">
    <link href="plugins/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/nano-scroll/nanoscroller.css">
    <link rel="stylesheet" href="plugins/metisMenu/metisMenu.min.css">
    <link href="plugins/iCheck/blue.css" rel="stylesheet">
    <!--template css-->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <!--top bar start-->
    <div class="top-bar light-top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6">
                    <a href="index.html" class="admin-logo">
                        <h1><img src="images/logo-dark.png" alt=""></h1>
                    </a>
                    <div class="left-nav-toggle visible-xs visible-sm">
                        <a href="">
                            <i class="glyphicon glyphicon-menu-hamburger"></i>
                        </a>
                    </div>
                    <!--end nav toggle icon-->

                </div>
                <div class="col-xs-6">
                    <ul class="list-inline top-right-nav">
                        <li class="dropdown avtar-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/avtar-1.jpg" class="img-circle" width="30" alt="">
                            </a>
                            <ul class="dropdown-menu top-dropdown">
                                <!-- <li><a href="javascript: void(0);"><i class="icon-bell"></i> Activities</a></li>
                                        <li><a href="javascript: void(0);"><i class="icon-user"></i> Profile</a></li>
                                        <li><a href="javascript: void(0);"><i class="icon-settings"></i> Settings</a></li>
                                        <li class="divider"></li> -->
                                <li><a href="javascript: void(0);"><i class="icon-logout"></i> Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- top bar end-->

    <!--left navigation start-->
    <aside class="float-navigation light-navigation">
        <div class="nano">
            <div class="nano-content">
                <ul class="metisMenu nav" id="menu">
                    <li class="nav-heading"><span></span></li>
                    <li><a href="dadosdiarios.html"><i class="fa fa-user"></i> Dados Diários </a></li>
                    <li><a href="page-calendar.html"><i class="fa fa-calendar"></i> Historico paciente </a></li>
                    <li><a href="gerenciamento.html"><i class="fa fa-server"></i> Gerenciamento </a></li>
                    <li><a href="page-login.html"><i class="fa fa-sign-in"></i> Sair </a></li>
                </ul>
            </div>
            <!--nano content-->
        </div>
        <!--nano scroll end-->
    </aside>
    <!--left navigation end-->


    <!--main content start-->
    <section class="main-content">
        <!--page header start-->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Cadastro Paciente</h4>
                </div>

            </div>
        </div>
        <!--page header end-->

        <!--start page content-->
        <div class="row">
            <div class="panel panel-default">
                <form style="margin: 1%;" method="POST">
                    
            <form method="GET" action="cadastropaciente.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <table class="table table-hover">
                                <thead >
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Parentesco</th>
                                        <th scope="col">Principal</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    
                                    
                                        
                                    <tr>
                                       <td><?php echo $cliente['id_cliente'];?></td> 
                                       <td><?php echo $cliente['nome_cliente'];?></td> 
                                       
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <input class="btn btn-primary" type="submit" value="Excluir">

                        </div>

                        <div class="col-md-3 mb-1">
                            <p>Responsavel</p>
                            <select name="id_cliente" id="id_cliente" required class="form-control m-bv required">
                                                    <option><font style="vertical-align: inherit;"></font></option>
                                                    <?php

                                                        do{
                                                            ?>

                                                    <option value="<?php echo $linha['id_cliente']?>" name="id_cliente"><?php echo $linha['nome_cliente']; ?></option>            

                                                        
                                                    <?php } while($linha = $sql_query->fetch_assoc());?>
                                                </select>
                                                        
                            <p>(*) Obrigatório</p>
                            
                        </div>
                        <div class="col-md-3 mb-3">
                            <p>Grau de Parentesco</p>
                            <select name="parentesco" required class="form-control m-bv required" id="parentesco">
                                                    <option><font style="vertical-align: inherit;"></font></option>
                                                    <option><font style="vertical-align: inherit;" value="filho">Filho</font></option>
                                                    <option><font style="vertical-align: inherit;" value="filha">Filha</font></option>
                                                    <option><font style="vertical-align: inherit;" value="sobrinho">Sobrinho(a)</font></option>
                                                    <option><font style="vertical-align: inherit;" value="outros">Outros</font></option>
                                                </select>
                            <p>(*) Obrigatório</p>
                            <input class="btn btn-primary add"  type="submit" value="Adicionar" name="adicionar_cliente">
                        </div>
                    </div>
                </form>

                <div class="row">
                    <form>
                        <div class="col-md-12">
                            <div class="col-md-3 mb-1">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Enfermidade</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                            <td>Diabetes</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                            <td>Hipertensão</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    </select>
                                <br>
                                <button type="button" class="btn btn-primary">Adicionar</button>
                                <button type="button" class="btn btn-primary">Excluir</button>
                            </div>

                            <div class="col-md-3 mb-1">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Restrição Alimentar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="listRestricao">
                                           
                                        <tr>
                                    </tbody>
                                </table>
                                <input type="text" class="form-control" id="nomeRestricao" placeholder="nome@exemplo.com">
                                <br>
                                <button type="button" onclick="restricaoAlimentar()" class="btn btn-primary">Adicionar</button>
                                <button type="button" class="btn btn-primary">Excluir</button>

                                
                            </div>
                            <div class="col-md-6 mb-1">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Medicação</th>
                                            <th scope="col">Dose</th>
                                            <th scope="col">Intervalo</th>
                                            <th scope="col">Observação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                            <td>Aradois 50mg</td>
                                            <td>1 comprimido</td>
                                            <td>12 horas</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                            <td>Acetilcisteina 600mg</td>
                                            <td>1 envelope</td>
                                            <td>24 horas</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                            <td>Anlodipino 5mg</td>
                                            <td>1 comprimido</td>
                                            <td>24 horas</td>
                                            <td>Noite</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td> <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Medicação"></td>
                                            <td> <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Dose"></td>
                                            <td> <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Intervalo"></td>
                                            <td> <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Observação"></td>

                                        </tr>
                                        <tr>
                                            <td><button type="button" class="btn btn-primary">Adicionar</button></td>
                                            <td><button type="button" class="btn btn-primary">Excluir</button></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <br>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>

        <!--Start footer-->
        <footer class="footer">
            <span>Copyright &copy; 2020. Float</span>
        </footer>
        <!--end footer-->

    </section>
    <!--end main content-->




    <!--Common plugins-->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/pace/pace.min.js"></script>
    <script src="plugins/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
    <script src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="plugins/nano-scroll/jquery.nanoscroller.min.js"></script>
    <script src="plugins/metisMenu/metisMenu.min.js"></script>
    <script src="js/float-custom.js"></script>
    <!-- iCheck for radio and checkboxes -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue'
            });
        });
    </script>

</body>

</html>