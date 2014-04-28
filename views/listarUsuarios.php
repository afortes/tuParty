
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Gestión de usuarios">

    <meta name="description" content="Listar Usuarios">
    <meta name="author" content="Alex Fortes">

    <title>TuParty.com</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="../css/shop-item.css" rel="stylesheet">
    <?php require_once('../model/usuario.class.php');?> <!-- Esto rompe el modelo MVC al comunicar directamente con la clase, pero no habia manera de pasar el resource de mysql_query desde el controlador a la vista -->
   

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home">TuParty.com</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#about">About</a>
                    </li>
                    <li><a href="#services">Services</a>
                    </li>
                    <li><a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">

            <div class="col-lg-3">
                <p class="lead">Bienvenido</p>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Navegación 1</a>
                    <a href="#" class="list-group-item">Navegación 2</a>
                    <a href="#" class="list-group-item">Navegación 3</a>
                </div>
            </div>

            <div class="col-lg-9">

                <div class="thumbnail">
                    
                    <div class="caption-full">
                        
                        <h4>Lista de usuarios de la aplicación</h4>                
                         
                        


                      <!-- Muestra la lista de usuarios -->
                      <?php $pais=$_REQUEST['pais'];
                            $provincia=$_REQUEST['provincia'];
                      ?>
                      <?php $sql= usuario::listarUsuarios($pais,$provincia); ?>

                        <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Email</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>Pais</th>
                                    <th>Provincia</th>
                                    <th>CP</th>
                                    <th>Telf</th>

                                    

                                </tr>
                                </thead>

                        
                        
                         <?php while($row=mysql_fetch_array($sql)){ ?>


                             
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['id_usuario'];?></td>
                                        <td><?php echo $row['email_usuario'];?></td>
                                        <td><?php echo $row['nombre_usuario'];?></td>
                                        <td><?php echo $row['apellidos_usuario'];?></td>
                                        <td><?php echo $row['fecha_nacimiento_usuario'];?></td>
                                        <td><?php echo $row['pais_usuario'];?></td>
                                        <td><?php echo $row['provincia_usuario'];?></td>
                                        <td><?php echo $row['cp_usuario'];?></td>
                                        <td><?php echo $row['telefono_usuario'];?></td>
                                        
                                        <td>
                                            <?php 
                                            $id=$row['id_usuario'];
                                             echo "<a href='../controller/modificarUsuarioController.php?action=buscar&id=$id'> Modificar</a>";
                                             ?>
                                        </td>
                                    </tr>
                                </tbody>

                             
                             
                        <?php }  ?>  
                            
                    </table>
                                  
                    </div>
                   
                </div>


            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2013 - Template by <a href="http://maxoffsky.com/">Maks</a>
                    </p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
