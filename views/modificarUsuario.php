<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gestión de usuarios">
    <meta name="author" content="Alex Fortes">

    <title>TuParty.com</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="../css/shop-item.css" rel="stylesheet">
   

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
                        
                        <h4><a href="#">Nuevo usuario</a>
                        </h4>
                         <p>
                      <!-- Formulario de insercción de datos -->

                               <form role="form" action="../controller/modificarUsuarioController.php" method="get">
                                  
                                  <input type="hidden" name="action" value="modificar">


                                  <div class="form-group">
                                    <label for="Nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre"
                                           placeholder="Introduce tu nombre" name="nombre" value="<?php echo $_REQUEST['nombre'];?>">
                                  </div>

                                  <div class="form-group">
                                    <label for="Apellidos">Apellidos</label>
                                    <input type="text" class="form-control" id="apellidos"
                                           placeholder="Introduce tus apellidos" name="apellidos" value="<?php echo $_REQUEST['apellidos'];?>">
                                  </div>

                                 <div class="form-group">
                                    <label for="Contraseña">Contraseña</label>
                                    <input type="password" class="form-control" id="pass" name="pass" 
                                           placeholder="Introduce tu contraseña" value="<?php echo $_REQUEST['pass'];?>">
                                  </div>

                                  <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="Introduce tu email" value="<?php echo $_REQUEST['email'];?>">
                                  </div>

                                  <div class="form-group">
                                    <label for="Fecha de nacimiento">Fecha de nacimiento</label>
                                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Introduce tu fecha de nacimiento" value="<?php echo $_REQUEST['fecha_nacimiento'];?>">
                                  </div>

                                  <div class="form-group">
                                      <label class="control-label" for="selectbasic">País</label>
                                      <div class="controls">
                                          <select id="pais" name="pais">
                                                    <option value="AF" <?php if($_REQUEST['pais']=='AF'){echo "selected";} ?>>Afganistán</option> 
                                                    <option value="AL" <?php if($_REQUEST['pais']=='AL'){echo "selected";} ?>>Albania</option> 
                                                    <option value="DE" <?php if($_REQUEST['pais']=='DE'){echo "selected";} ?>>Alemania</option> 
                                                    <option value="AD" <?php if($_REQUEST['pais']=='AD'){echo "selected";} ?>>Andorra</option> 
                                                    <option value="AO" <?php if($_REQUEST['pais']=='AO'){echo "selected";} ?>>Angola</option> 
                                                    <option value="AI" <?php if($_REQUEST['pais']=='AI'){echo "selected";} ?>>Anguilla</option> 
                                                    <option value="AQ" <?php if($_REQUEST['pais']=='AQ'){echo "selected";} ?>>Antártida</option> 
                                                    <option value="AG" <?php if($_REQUEST['pais']=='AG'){echo "selected";} ?>>Antigua y Barbuda</option> 
                                                    <option value="AN" <?php if($_REQUEST['pais']=='AN'){echo "selected";} ?>>Antillas Holandesas</option> 
                                                    <option value="SA" <?php if($_REQUEST['pais']=='SA'){echo "selected";} ?>>Arabia Saudí</option> 
                                                    <option value="DZ" <?php if($_REQUEST['pais']=='DZ'){echo "selected";} ?>>Argelia</option> 
                                                    <option value="AR" <?php if($_REQUEST['pais']=='AR'){echo "selected";} ?>>Argentina</option> 
                                                    <option value="AM" <?php if($_REQUEST['pais']=='AM'){echo "selected";} ?>>Armenia</option> 
                                                    <option value="AW" <?php if($_REQUEST['pais']=='AW'){echo "selected";} ?>>Aruba</option> 
                                                    <option value="AU" <?php if($_REQUEST['pais']=='AU'){echo "selected";} ?>>Australia</option> 
                                                    <option value="AT" <?php if($_REQUEST['pais']=='AT'){echo "selected";} ?>>Austria</option>  
                                                    <option value="AZ" <?php if($_REQUEST['pais']=='AZ'){echo "selected";} ?>>Azerbaiyán</option>  
                                                    <option value="BS" <?php if($_REQUEST['pais']=='BS'){echo "selected";} ?>>Bahamas</option>  
                                                    <option value="BH" <?php if($_REQUEST['pais']=='BH'){echo "selected";} ?>>Bahrein</option>  
                                                    <option value="BD" <?php if($_REQUEST['pais']=='BD'){echo "selected";} ?>>Bangladesh</option>  
                                                    <option value="BB" <?php if($_REQUEST['pais']=='BB'){echo "selected";} ?>>Barbados</option>  
                                                    <option value="BE" <?php if($_REQUEST['pais']=='BE'){echo "selected";} ?>>Bélgica</option>  
                                                    <option value="BZ" <?php if($_REQUEST['pais']=='BZ'){echo "selected";} ?>>Belice</option>  
                                                    <option value="BJ" <?php if($_REQUEST['pais']=='BJ'){echo "selected";} ?>>Benin</option>  
                                                    <option value="BM" <?php if($_REQUEST['pais']=='BM'){echo "selected";} ?>>Bermudas</option>  
                                                    <option value="BY" <?php if($_REQUEST['pais']=='BY'){echo "selected";} ?>>Bielorrusia</option>  
                                                    <option value="MM" <?php if($_REQUEST['pais']=='MM'){echo "selected";} ?>>Birmania</option>  
                                                    <option value="BO" <?php if($_REQUEST['pais']=='BO'){echo "selected";} ?>>Bolivia</option>  
                                                    <option value="BA" <?php if($_REQUEST['pais']=='BA'){echo "selected";} ?>>Bosnia y Herzegovina</option>  
                                                    <option value="BW" <?php if($_REQUEST['pais']=='BW'){echo "selected";} ?>>Botswana</option>  
                                                    <option value="BR" <?php if($_REQUEST['pais']=='BR'){echo "selected";} ?>>Brasil</option>  
                                                    <option value="BN" <?php if($_REQUEST['pais']=='BN'){echo "selected";} ?>>Brunei</option>  
                                                    <option value="BG" <?php if($_REQUEST['pais']=='BG'){echo "selected";} ?>>Bulgaria</option>  
                                                    <option value="BF" <?php if($_REQUEST['pais']=='BF'){echo "selected";} ?>>Burkina Faso</option>  
                                                    <option value="BI" <?php if($_REQUEST['pais']=='BI'){echo "selected";} ?>>Burundi</option>  
                                                    <option value="BT" <?php if($_REQUEST['pais']=='BT'){echo "selected";} ?>>Bután</option>  
                                                    <option value="CV" <?php if($_REQUEST['pais']=='CV'){echo "selected";} ?>>Cabo Verde</option>  
                                                    <option value="KH" <?php if($_REQUEST['pais']=='KH'){echo "selected";} ?>>Camboya</option>  
                                                    <option value="CM" <?php if($_REQUEST['pais']=='CM'){echo "selected";} ?>>Camerún</option>  
                                                    <option value="CA" <?php if($_REQUEST['pais']=='CA'){echo "selected";} ?>>Canadá</option>  
                                                    <option value="TD" <?php if($_REQUEST['pais']=='TD'){echo "selected";} ?>>Chad</option>  
                                                    <option value="CL" <?php if($_REQUEST['pais']=='CL'){echo "selected";} ?>>Chile</option>  
                                                    <option value="CN" <?php if($_REQUEST['pais']=='CN'){echo "selected";} ?>>China</option>  
                                                    <option value="CY" <?php if($_REQUEST['pais']=='CY'){echo "selected";} ?>>Chipre</option>  
                                                    <option value="VA" <?php if($_REQUEST['pais']=='VA'){echo "selected";} ?>>Ciudad del Vaticano (Santa Sede)</option>  
                                                    <option value="CO" <?php if($_REQUEST['pais']=='CO'){echo "selected";} ?>>Colombia</option>  
                                                    <option value="KM" <?php if($_REQUEST['pais']=='KM'){echo "selected";} ?>>Comores</option>  
                                                    <option value="CG" <?php if($_REQUEST['pais']=='CG'){echo "selected";} ?>>Congo</option>  
                                                    <option value="CD" <?php if($_REQUEST['pais']=='CD'){echo "selected";} ?>>Congo, República Democrática del</option>  
                                                    <option value="KR" <?php if($_REQUEST['pais']=='KR'){echo "selected";} ?>>Corea</option>  
                                                    <option value="KP" <?php if($_REQUEST['pais']=='KP'){echo "selected";} ?>>Corea del Norte</option>  
                                                    <option value="CI" <?php if($_REQUEST['pais']=='CI'){echo "selected";} ?>>Costa de Marfíl</option>  
                                                    <option value="CR" <?php if($_REQUEST['pais']=='CR'){echo "selected";} ?>>Costa Rica</option>  
                                                    <option value="HR" <?php if($_REQUEST['pais']=='HR'){echo "selected";} ?>>Croacia (Hrvatska)</option>  
                                                    <option value="CU" <?php if($_REQUEST['pais']=='CU'){echo "selected";} ?>>Cuba</option>  
                                                    <option value="DK" <?php if($_REQUEST['pais']=='DK'){echo "selected";} ?>>Dinamarca</option>  
                                                    <option value="DJ" <?php if($_REQUEST['pais']=='DJ'){echo "selected";} ?>>Djibouti</option>  
                                                    <option value="DM" <?php if($_REQUEST['pais']=='DM'){echo "selected";} ?>>Dominica</option>  
                                                    <option value="EC" <?php if($_REQUEST['pais']=='EC'){echo "selected";} ?>>Ecuador</option>  
                                                    <option value="EG" <?php if($_REQUEST['pais']=='EG'){echo "selected";} ?>>Egipto</option>  
                                                    <option value="SV" <?php if($_REQUEST['pais']=='SV'){echo "selected";} ?>>El Salvador</option>  
                                                    <option value="AE" <?php if($_REQUEST['pais']=='AE'){echo "selected";} ?>>Emiratos Árabes Unidos</option>  
                                                    <option value="ER" <?php if($_REQUEST['pais']=='ER'){echo "selected";} ?>>Eritrea</option>  
                                                    <option value="SI" <?php if($_REQUEST['pais']=='SI'){echo "selected";} ?>>Eslovenia</option>  
                                                    <option value="ES" <?php if($_REQUEST['pais']=='ES'){echo "selected";} ?>>España</option>  
                                                    <option value="US" <?php if($_REQUEST['pais']=='US'){echo "selected";} ?>>Estados Unidos</option>  
                                                    <option value="EE" <?php if($_REQUEST['pais']=='EE'){echo "selected";} ?>>Estonia</option>  
                                                    <option value="ET" <?php if($_REQUEST['pais']=='ET'){echo "selected";} ?>>Etiopía</option>  
                                                    <option value="FJ" <?php if($_REQUEST['pais']=='FJ'){echo "selected";} ?>>Fiji</option>  
                                                    <option value="PH" <?php if($_REQUEST['pais']=='PH'){echo "selected";} ?>>Filipinas</option>  
                                                    <option value="FI" <?php if($_REQUEST['pais']=='FI'){echo "selected";} ?>>Finlandia</option>  
                                                    <option value="FR" <?php if($_REQUEST['pais']=='FR'){echo "selected";} ?>>Francia</option>  
                                                    <option value="GA" <?php if($_REQUEST['pais']=='GA'){echo "selected";} ?>>Gabón</option>  
                                                    <option value="GM" <?php if($_REQUEST['pais']=='GM'){echo "selected";} ?>>Gambia</option>  
                                                    <option value="GE" <?php if($_REQUEST['pais']=='GE'){echo "selected";} ?>>Georgia</option>  
                                                    <option value="GH" <?php if($_REQUEST['pais']=='GH'){echo "selected";} ?>>Ghana</option>  
                                                    <option value="GI" <?php if($_REQUEST['pais']=='GI'){echo "selected";} ?>>Gibraltar</option>  
                                                    <option value="GD" <?php if($_REQUEST['pais']=='GD'){echo "selected";} ?>>Granada</option>  
                                                    <option value="GR" <?php if($_REQUEST['pais']=='GR'){echo "selected";} ?>>Grecia</option>  
                                                    <option value="GL" <?php if($_REQUEST['pais']=='GL'){echo "selected";} ?>>Groenlandia</option>  
                                                    <option value="GP" <?php if($_REQUEST['pais']=='GP'){echo "selected";} ?>>Guadalupe</option>  
                                                    <option value="GU" <?php if($_REQUEST['pais']=='GU'){echo "selected";} ?>>Guam</option>  
                                                    <option value="GT" <?php if($_REQUEST['pais']=='GT'){echo "selected";} ?>>Guatemala</option>  
                                                    <option value="GY" <?php if($_REQUEST['pais']=='GY'){echo "selected";} ?>>Guayana</option>  
                                                    <option value="GF" <?php if($_REQUEST['pais']=='GF'){echo "selected";} ?>>Guayana Francesa</option>  
                                                    <option value="GN" <?php if($_REQUEST['pais']=='GN'){echo "selected";} ?>>Guinea</option>  
                                                    <option value="GQ" <?php if($_REQUEST['pais']=='GQ'){echo "selected";} ?>>Guinea Ecuatorial</option>  
                                                    <option value="GW" <?php if($_REQUEST['pais']=='GW'){echo "selected";} ?>>Guinea-Bissau</option>  
                                                    <option value="HT" <?php if($_REQUEST['pais']=='HT'){echo "selected";} ?>>Haití</option>  
                                                    <option value="HN" <?php if($_REQUEST['pais']=='HN'){echo "selected";} ?>>Honduras</option>  
                                                    <option value="HU" <?php if($_REQUEST['pais']=='HU'){echo "selected";} ?>>Hungría</option>  
                                                    <option value="IN" <?php if($_REQUEST['pais']=='IN'){echo "selected";} ?>>India</option>  
                                                    <option value="ID" <?php if($_REQUEST['pais']=='ID'){echo "selected";} ?>>Indonesia</option>  
                                                    <option value="IQ" <?php if($_REQUEST['pais']=='IQ'){echo "selected";} ?>>Irak</option>  
                                                    <option value="IR" <?php if($_REQUEST['pais']=='IR'){echo "selected";} ?>>Irán</option>  
                                                    <option value="IE" <?php if($_REQUEST['pais']=='IE'){echo "selected";} ?>>Irlanda</option>  
                                                    <option value="BV" <?php if($_REQUEST['pais']=='BV'){echo "selected";} ?>>Isla Bouvet</option>  
                                                    <option value="CX" <?php if($_REQUEST['pais']=='CX'){echo "selected";} ?>>Isla de Christmas</option>  
                                                    <option value="IS" <?php if($_REQUEST['pais']=='IS'){echo "selected";} ?>>Islandia</option>  
                                                    <option value="KY" <?php if($_REQUEST['pais']=='KY'){echo "selected";} ?>>Islas Caimán</option>  
                                                    <option value="CK" <?php if($_REQUEST['pais']=='CK'){echo "selected";} ?>>Islas Cook</option>  
                                                    <option value="CC" <?php if($_REQUEST['pais']=='CC'){echo "selected";} ?>>Islas de Cocos o Keeling</option>  
                                                    <option value="FO" <?php if($_REQUEST['pais']=='FO'){echo "selected";} ?>>Islas Faroe</option>  
                                                    <option value="HM" <?php if($_REQUEST['pais']=='HM'){echo "selected";} ?>>Islas Heard y McDonald</option>  
                                                    <option value="FK" <?php if($_REQUEST['pais']=='FK'){echo "selected";} ?>>Islas Malvinas</option>  
                                                    <option value="MP" <?php if($_REQUEST['pais']=='MP'){echo "selected";} ?>>Islas Marianas del Norte</option>  
                                                    <option value="MH" <?php if($_REQUEST['pais']=='MH'){echo "selected";} ?>>Islas Marshall</option>  
                                                    <option value="UM" <?php if($_REQUEST['pais']=='UM'){echo "selected";} ?>>Islas menores de Estados Unidos</option>  
                                                    <option value="PW" <?php if($_REQUEST['pais']=='PW'){echo "selected";} ?>>Islas Palau</option>  
                                                    <option value="SB" <?php if($_REQUEST['pais']=='SB'){echo "selected";} ?>>Islas Salomón</option>  
                                                    <option value="SJ" <?php if($_REQUEST['pais']=='SJ'){echo "selected";} ?>>Islas Svalbard y Jan Mayen</option>  
                                                    <option value="TK" <?php if($_REQUEST['pais']=='TK'){echo "selected";} ?>>Islas Tokelau</option>  
                                                    <option value="TC" <?php if($_REQUEST['pais']=='TC'){echo "selected";} ?>>Islas Turks y Caicos</option>  
                                                    <option value="VI" <?php if($_REQUEST['pais']=='VI'){echo "selected";} ?>>Islas Vírgenes (EE.UU.)</option>  
                                                    <option value="VG" <?php if($_REQUEST['pais']=='VG'){echo "selected";} ?>>Islas Vírgenes (Reino Unido)</option>  
                                                    <option value="WF" <?php if($_REQUEST['pais']=='WF'){echo "selected";} ?>>Islas Wallis y Futuna</option>  
                                                    <option value="IL" <?php if($_REQUEST['pais']=='IL'){echo "selected";} ?>>Israel</option>  
                                                    <option value="IT" <?php if($_REQUEST['pais']=='IT'){echo "selected";} ?>>Italia</option>  
                                                    <option value="JM" <?php if($_REQUEST['pais']=='JM'){echo "selected";} ?>>Jamaica</option>  
                                                    <option value="JP" <?php if($_REQUEST['pais']=='JP'){echo "selected";} ?>>Japón</option>  
                                                    <option value="JO" <?php if($_REQUEST['pais']=='JO'){echo "selected";} ?>>Jordania</option>  
                                                    <option value="KZ" <?php if($_REQUEST['pais']=='KZ'){echo "selected";} ?>>Kazajistán</option>  
                                                    <option value="KE" <?php if($_REQUEST['pais']=='KE'){echo "selected";} ?>>Kenia</option>  
                                                    <option value="KG" <?php if($_REQUEST['pais']=='KG'){echo "selected";} ?>>Kirguizistán</option>  
                                                    <option value="KI" <?php if($_REQUEST['pais']=='KI'){echo "selected";} ?>>Kiribati</option>  
                                                    <option value="KW" <?php if($_REQUEST['pais']=='KW'){echo "selected";} ?>>Kuwait</option>  
                                                    <option value="LA" <?php if($_REQUEST['pais']=='LA'){echo "selected";} ?>>Laos</option>  
                                                    <option value="LS" <?php if($_REQUEST['pais']=='LS'){echo "selected";} ?>>Lesotho</option>  
                                                    <option value="LV" <?php if($_REQUEST['pais']=='LV'){echo "selected";} ?>>Letonia</option>  
                                                    <option value="LB" <?php if($_REQUEST['pais']=='LB'){echo "selected";} ?>>Líbano</option>  
                                                    <option value="LR" <?php if($_REQUEST['pais']=='LR'){echo "selected";} ?>>Liberia</option>  
                                                    <option value="LY" <?php if($_REQUEST['pais']=='LY'){echo "selected";} ?>>Libia</option>  
                                                    <option value="LI" <?php if($_REQUEST['pais']=='LI'){echo "selected";} ?>>Liechtenstein</option>  
                                                    <option value="LT" <?php if($_REQUEST['pais']=='LT'){echo "selected";} ?>>Lituania</option>  
                                                    <option value="LU" <?php if($_REQUEST['pais']=='LU'){echo "selected";} ?>>Luxemburgo</option>  
                                                    <option value="MK" <?php if($_REQUEST['pais']=='MK'){echo "selected";} ?>>Macedonia, Ex-República Yugoslava de</option>  
                                                    <option value="MG" <?php if($_REQUEST['pais']=='MG'){echo "selected";} ?>>Madagascar</option>  
                                                    <option value="MY" <?php if($_REQUEST['pais']=='MY'){echo "selected";} ?>>Malasia</option>  
                                                    <option value="MW" <?php if($_REQUEST['pais']=='MW'){echo "selected";} ?>>Malawi</option>  
                                                    <option value="MV" <?php if($_REQUEST['pais']=='MV'){echo "selected";} ?>>Maldivas</option>  
                                                    <option value="ML" <?php if($_REQUEST['pais']=='ML'){echo "selected";} ?>>Malí</option>  
                                                    <option value="MT" <?php if($_REQUEST['pais']=='MT'){echo "selected";} ?>>Malta</option>  
                                                    <option value="MA" <?php if($_REQUEST['pais']=='MA'){echo "selected";} ?>>Marruecos</option>  
                                                    <option value="MQ" <?php if($_REQUEST['pais']=='MQ'){echo "selected";} ?>>Martinica</option>  
                                                    <option value="MU" <?php if($_REQUEST['pais']=='MU'){echo "selected";} ?>>Mauricio</option>  
                                                    <option value="MR" <?php if($_REQUEST['pais']=='MR'){echo "selected";} ?>>Mauritania</option>  
                                                    <option value="YT" <?php if($_REQUEST['pais']=='YT'){echo "selected";} ?>>Mayotte</option>  
                                                    <option value="MX" <?php if($_REQUEST['pais']=='MX'){echo "selected";} ?>>México</option>  
                                                    <option value="FM" <?php if($_REQUEST['pais']=='FM'){echo "selected";} ?>>Micronesia</option>  
                                                    <option value="MD" <?php if($_REQUEST['pais']=='MD'){echo "selected";} ?>>Moldavia</option>  
                                                    <option value="MC" <?php if($_REQUEST['pais']=='MC'){echo "selected";} ?>>Mónaco</option>  
                                                    <option value="MN" <?php if($_REQUEST['pais']=='MN'){echo "selected";} ?>>Mongolia</option>  
                                                    <option value="MS" <?php if($_REQUEST['pais']=='MS'){echo "selected";} ?>>Montserrat</option>  
                                                    <option value="MZ" <?php if($_REQUEST['pais']=='MZ'){echo "selected";} ?>>Mozambique</option>  
                                                    <option value="NA" <?php if($_REQUEST['pais']=='NA'){echo "selected";} ?>>Namibia</option>  
                                                    <option value="NR" <?php if($_REQUEST['pais']=='NR'){echo "selected";} ?>>Nauru</option>  
                                                    <option value="NP" <?php if($_REQUEST['pais']=='NP'){echo "selected";} ?>>Nepal</option>  
                                                    <option value="NI" <?php if($_REQUEST['pais']=='NI'){echo "selected";} ?>>Nicaragua</option>  
                                                    <option value="NE" <?php if($_REQUEST['pais']=='NE'){echo "selected";} ?>>Níger</option>  
                                                    <option value="NG" <?php if($_REQUEST['pais']=='NG'){echo "selected";} ?>>Nigeria</option>  
                                                    <option value="NU" <?php if($_REQUEST['pais']=='NU'){echo "selected";} ?>>Niue</option>  
                                                    <option value="NF" <?php if($_REQUEST['pais']=='NF'){echo "selected";} ?>>Norfolk</option>  
                                                    <option value="NO" <?php if($_REQUEST['pais']=='NO'){echo "selected";} ?>>Noruega</option>  
                                                    <option value="NC" <?php if($_REQUEST['pais']=='NC'){echo "selected";} ?>>Nueva Caledonia</option>  
                                                    <option value="NZ" <?php if($_REQUEST['pais']=='NZ'){echo "selected";} ?>>Nueva Zelanda</option>  
                                                    <option value="OM" <?php if($_REQUEST['pais']=='OM'){echo "selected";} ?>>Omán</option>  
                                                    <option value="NL" <?php if($_REQUEST['pais']=='NL'){echo "selected";} ?>>Países Bajos</option>  
                                                    <option value="PA" <?php if($_REQUEST['pais']=='PA'){echo "selected";} ?>>Panamá</option>  
                                                    <option value="PG" <?php if($_REQUEST['pais']=='PG'){echo "selected";} ?>>Papúa Nueva Guinea</option>  
                                                    <option value="PK" <?php if($_REQUEST['pais']=='PK'){echo "selected";} ?>>Paquistán</option>  
                                                    <option value="PY" <?php if($_REQUEST['pais']=='PY'){echo "selected";} ?>>Paraguay</option>  
                                                    <option value="PE" <?php if($_REQUEST['pais']=='PE'){echo "selected";} ?>>Perú</option>  
                                                    <option value="PN" <?php if($_REQUEST['pais']=='PN'){echo "selected";} ?>>Pitcairn</option>  
                                                    <option value="PF" <?php if($_REQUEST['pais']=='PF'){echo "selected";} ?>>Polinesia Francesa</option>  
                                                    <option value="PL" <?php if($_REQUEST['pais']=='PL'){echo "selected";} ?>>Polonia</option>  
                                                    <option value="PT" <?php if($_REQUEST['pais']=='PT'){echo "selected";} ?>>Portugal</option>  
                                                    <option value="PR" <?php if($_REQUEST['pais']=='PR'){echo "selected";} ?>>Puerto Rico</option>  
                                                    <option value="QA" <?php if($_REQUEST['pais']=='QA'){echo "selected";} ?>>Qatar</option>  
                                                    <option value="UK" <?php if($_REQUEST['pais']=='UK'){echo "selected";} ?>>Reino Unido</option>  
                                                    <option value="CF" <?php if($_REQUEST['pais']=='CF'){echo "selected";} ?>>República Centroafricana</option>  
                                                    <option value="CZ" <?php if($_REQUEST['pais']=='CZ'){echo "selected";} ?>>República Checa</option>  
                                                    <option value="ZA" <?php if($_REQUEST['pais']=='ZA'){echo "selected";} ?>>República de Sudáfrica</option>  
                                                    <option value="DO" <?php if($_REQUEST['pais']=='DO'){echo "selected";} ?>>República Dominicana</option>  
                                                    <option value="SK" <?php if($_REQUEST['pais']=='SK'){echo "selected";} ?>>República Eslovaca</option>  
                                                    <option value="RE" <?php if($_REQUEST['pais']=='RE'){echo "selected";} ?>>Reunión</option>  
                                                    <option value="RW" <?php if($_REQUEST['pais']=='RW'){echo "selected";} ?>>Ruanda</option>  
                                                    <option value="RO" <?php if($_REQUEST['pais']=='RO'){echo "selected";} ?>>Rumania</option>  
                                                    <option value="RU" <?php if($_REQUEST['pais']=='RU'){echo "selected";} ?>>Rusia</option>  
                                                    <option value="EH" <?php if($_REQUEST['pais']=='EH'){echo "selected";} ?>>Sahara Occidental</option>  
                                                    <option value="KN" <?php if($_REQUEST['pais']=='KN'){echo "selected";} ?>>Saint Kitts y Nevis</option>  
                                                    <option value="WS" <?php if($_REQUEST['pais']=='WS'){echo "selected";} ?>>Samoa</option>  
                                                    <option value="AS" <?php if($_REQUEST['pais']=='AS'){echo "selected";} ?>>Samoa Americana</option>  
                                                    <option value="SM" <?php if($_REQUEST['pais']=='SM'){echo "selected";} ?>>San Marino</option>  
                                                    <option value="VC" <?php if($_REQUEST['pais']=='VC'){echo "selected";} ?>>San Vicente y Granadinas</option>  
                                                    <option value="SH" <?php if($_REQUEST['pais']=='SH'){echo "selected";} ?>>Santa Helena</option>  
                                                    <option value="LC" <?php if($_REQUEST['pais']=='LC'){echo "selected";} ?>>Santa Lucía</option>  
                                                    <option value="ST" <?php if($_REQUEST['pais']=='ST'){echo "selected";} ?>>Santo Tomé y Príncipe</option>  
                                                    <option value="SN" <?php if($_REQUEST['pais']=='SN'){echo "selected";} ?>>Senegal</option>  
                                                    <option value="SC" <?php if($_REQUEST['pais']=='SC'){echo "selected";} ?>>Seychelles</option>  
                                                    <option value="SL" <?php if($_REQUEST['pais']=='SL'){echo "selected";} ?>>Sierra Leona</option>  
                                                    <option value="SG" <?php if($_REQUEST['pais']=='SG'){echo "selected";} ?>>Singapur</option>  
                                                    <option value="SY" <?php if($_REQUEST['pais']=='SY'){echo "selected";} ?>>Siria</option>  
                                                    <option value="SO" <?php if($_REQUEST['pais']=='SO'){echo "selected";} ?>>Somalia</option>  
                                                    <option value="LK" <?php if($_REQUEST['pais']=='LK'){echo "selected";} ?>>Sri Lanka</option>  
                                                    <option value="PM" <?php if($_REQUEST['pais']=='PM'){echo "selected";} ?>>St. Pierre y Miquelon</option>  
                                                    <option value="SZ" <?php if($_REQUEST['pais']=='SZ'){echo "selected";} ?>>Suazilandia</option>  
                                                    <option value="SD" <?php if($_REQUEST['pais']=='SD'){echo "selected";} ?>>Sudán</option>  
                                                    <option value="SE" <?php if($_REQUEST['pais']=='SE'){echo "selected";} ?>>Suecia</option>  
                                                    <option value="CH" <?php if($_REQUEST['pais']=='CH'){echo "selected";} ?>>Suiza</option>  
                                                    <option value="SR" <?php if($_REQUEST['pais']=='SR'){echo "selected";} ?>>Surinam</option>  
                                                    <option value="TH" <?php if($_REQUEST['pais']=='TH'){echo "selected";} ?>>Tailandia</option>  
                                                    <option value="TW" <?php if($_REQUEST['pais']=='TW'){echo "selected";} ?>>Taiwán</option>  
                                                    <option value="TZ" <?php if($_REQUEST['pais']=='TZ'){echo "selected";} ?>>Tanzania</option>  
                                                    <option value="TJ" <?php if($_REQUEST['pais']=='TJ'){echo "selected";} ?>>Tayikistán</option>  
                                                    <option value="TF" <?php if($_REQUEST['pais']=='TF'){echo "selected";} ?>>Territorios franceses del Sur</option>  
                                                    <option value="TP" <?php if($_REQUEST['pais']=='TP'){echo "selected";} ?>>Timor Oriental</option>  
                                                    <option value="TG" <?php if($_REQUEST['pais']=='TG'){echo "selected";} ?>>Togo</option>  
                                                    <option value="TO" <?php if($_REQUEST['pais']=='TO'){echo "selected";} ?>>Tonga</option>  
                                                    <option value="TT" <?php if($_REQUEST['pais']=='TT'){echo "selected";} ?>>Trinidad y Tobago</option>  
                                                    <option value="TN" <?php if($_REQUEST['pais']=='TN'){echo "selected";} ?>>Túnez</option>  
                                                    <option value="TM" <?php if($_REQUEST['pais']=='TM'){echo "selected";} ?>>Turkmenistán</option>  
                                                    <option value="TR" <?php if($_REQUEST['pais']=='TR'){echo "selected";} ?>>Turquía</option>  
                                                    <option value="TV" <?php if($_REQUEST['pais']=='TV'){echo "selected";} ?>>Tuvalu</option>  
                                                    <option value="UA" <?php if($_REQUEST['pais']=='UA'){echo "selected";} ?>>Ucrania</option>  
                                                    <option value="UG" <?php if($_REQUEST['pais']=='UG'){echo "selected";} ?>>Uganda</option>  
                                                    <option value="UY" <?php if($_REQUEST['pais']=='UY'){echo "selected";} ?>>Uruguay</option>  
                                                    <option value="UZ" <?php if($_REQUEST['pais']=='UZ'){echo "selected";} ?>>Uzbekistán</option>  
                                                    <option value="VU" <?php if($_REQUEST['pais']=='VU'){echo "selected";} ?>>Vanuatu</option>  
                                                    <option value="VE" <?php if($_REQUEST['pais']=='VE'){echo "selected";} ?>>Venezuela</option>  
                                                    <option value="VN" <?php if($_REQUEST['pais']=='VN'){echo "selected";} ?>>Vietnam</option>  
                                                    <option value="YE" <?php if($_REQUEST['pais']=='YE'){echo "selected";} ?>>Yemen</option>  
                                                    <option value="YU" <?php if($_REQUEST['pais']=='YU'){echo "selected";} ?>>Yugoslavia</option>  
                                                    <option value="ZM" <?php if($_REQUEST['pais']=='ZM'){echo "selected";} ?>>Zambia</option>  
                                                    <option value="ZW" <?php if($_REQUEST['pais']=='ZW'){echo "selected";} ?>>Zimbabue</option> 
                                          </select>
                                  </div>

                                  <div class="form-group">
                                      <label class="control-label" for="selectbasic">Provincia</label>
                                      <div class="controls">
                                          <select id="provincia" name="provincia">
                                                  <option value='0'>(Seleccionar)</option>
                                                  <option value='2' <?php if($_REQUEST['provincia']==2){echo "selected";} ?>> Álava</option>
                                                  <option value='3' <?php if($_REQUEST['provincia']==3){echo "selected";} ?>>Albacete</option>
                                                  <option value='4' <?php if($_REQUEST['provincia']==4){echo "selected";} ?>>Alicante/Alacant</option>
                                                  <option value='5' <?php if($_REQUEST['provincia']==5){echo "selected";} ?>>Almería</option>
                                                  <option value='6' <?php if($_REQUEST['provincia']==6){echo "selected";} ?>>Asturias</option>
                                                  <option value='7' <?php if($_REQUEST['provincia']==7){echo "selected";} ?>>Ávila</option>
                                                  <option value='8' <?php if($_REQUEST['provincia']==8){echo "selected";} ?>>Badajoz</option>
                                                  <option value='9' <?php if($_REQUEST['provincia']==9){echo "selected";} ?>>Barcelona</option>
                                                  <option value='10' <?php if($_REQUEST['provincia']==10){echo "selected";} ?>>Burgos</option>
                                                  <option value='11' <?php if($_REQUEST['provincia']==11){echo "selected";} ?>>Cáceres</option>
                                                  <option value='12' <?php if($_REQUEST['provincia']==12){echo "selected";} ?>>Cádiz</option>
                                                  <option value='13' <?php if($_REQUEST['provincia']==13){echo "selected";} ?>>Cantabria</option>
                                                  <option value='14' <?php if($_REQUEST['provincia']==14){echo "selected";} ?>>Castellón/Castelló</option>
                                                  <option value='15' <?php if($_REQUEST['provincia']==15){echo "selected";} ?>>Ceuta</option>
                                                  <option value='16' <?php if($_REQUEST['provincia']==16){echo "selected";} ?>>Ciudad Real</option>
                                                  <option value='17' <?php if($_REQUEST['provincia']==17){echo "selected";} ?>>Córdoba</option>
                                                  <option value='18' <?php if($_REQUEST['provincia']==18){echo "selected";} ?>>Cuenca</option>
                                                  <option value='19' <?php if($_REQUEST['provincia']==19){echo "selected";} ?>>Girona</option>
                                                  <option value='20' <?php if($_REQUEST['provincia']==20){echo "selected";} ?>>Las Palmas</option>
                                                  <option value='21' <?php if($_REQUEST['provincia']==21){echo "selected";} ?>>Granada</option>
                                                  <option value='22' <?php if($_REQUEST['provincia']==22){echo "selected";} ?>>Guadalajara</option>
                                                  <option value='23' <?php if($_REQUEST['provincia']==23){echo "selected";} ?>>Guipúzcoa</option>
                                                  <option value='24' <?php if($_REQUEST['provincia']==24){echo "selected";} ?>>Huelva</option>
                                                  <option value='25' <?php if($_REQUEST['provincia']==25){echo "selected";} ?>>Huesca</option>
                                                  <option value='26' <?php if($_REQUEST['provincia']==26){echo "selected";} ?>>Illes Balears</option>
                                                  <option value='27' <?php if($_REQUEST['provincia']==27){echo "selected";} ?>>Jaén</option>
                                                  <option value='28' <?php if($_REQUEST['provincia']==28){echo "selected";} ?>>A Coruña</option>
                                                  <option value='29' <?php if($_REQUEST['provincia']==29){echo "selected";} ?>>La Rioja</option>
                                                  <option value='30' <?php if($_REQUEST['provincia']==30){echo "selected";} ?>>León</option>
                                                  <option value='31' <?php if($_REQUEST['provincia']==31){echo "selected";} ?>>Lleida</option>
                                                  <option value='32' <?php if($_REQUEST['provincia']==32){echo "selected";} ?>>Lugo</option>
                                                  <option value='33' <?php if($_REQUEST['provincia']==33){echo "selected";} ?>>Madrid</option>
                                                  <option value='34' <?php if($_REQUEST['provincia']==34){echo "selected";} ?>>Málaga</option>
                                                  <option value='35' <?php if($_REQUEST['provincia']==35){echo "selected";} ?>>Melilla</option>
                                                  <option value='36' <?php if($_REQUEST['provincia']==36){echo "selected";} ?>>Murcia</option>
                                                  <option value='37' <?php if($_REQUEST['provincia']==37){echo "selected";} ?>>Navarra</option>
                                                  <option value='38' <?php if($_REQUEST['provincia']==38){echo "selected";} ?>>Ourense</option>
                                                  <option value='39' <?php if($_REQUEST['provincia']==39){echo "selected";} ?>>Palencia</option>
                                                  <option value='40' <?php if($_REQUEST['provincia']==40){echo "selected";} ?>>Pontevedra</option>
                                                  <option value='41' <?php if($_REQUEST['provincia']==41){echo "selected";} ?>>Salamanca</option>
                                                  <option value='42' <?php if($_REQUEST['provincia']==42){echo "selected";} ?>>Segovia</option>
                                                  <option value='43' <?php if($_REQUEST['provincia']==43){echo "selected";} ?>>Sevilla</option>
                                                  <option value='44' <?php if($_REQUEST['provincia']==44){echo "selected";} ?>>Soria</option>
                                                  <option value='45' <?php if($_REQUEST['provincia']==45){echo "selected";} ?>>Tarragona</option>
                                                  <option value='46' <?php if($_REQUEST['provincia']==46){echo "selected";} ?>>Santa Cruz de Tenerife</option>
                                                  <option value='47' <?php if($_REQUEST['provincia']==47){echo "selected";} ?>>Teruel</option>
                                                  <option value='48' <?php if($_REQUEST['provincia']==48){echo "selected";} ?>>Toledo</option>
                                                  <option value='49' <?php if($_REQUEST['provincia']==49){echo "selected";} ?>>Valencia/Valéncia</option>
                                                  <option value='50' <?php if($_REQUEST['provincia']==50){echo "selected";} ?>>Valladolid</option>
                                                  <option value='51' <?php if($_REQUEST['provincia']==51){echo "selected";} ?>>Vizcaya</option>
                                                  <option value='52' <?php if($_REQUEST['provincia']==52){echo "selected";} ?>>Zamora</option>
                                                  <option value='53' <?php if($_REQUEST['provincia']==53){echo "selected";} ?>>Zaragoza</option>
                                          </select>
                                      </div>
                                  </div>
                                  
                                  
                                  <div class="form-group">
                                    <label for="cp">Código Postal</label>
                                    <input type="number" class="form-control" id="cp" name="cp"
                                           placeholder="Introduce tu CP" value="<?php echo $_REQUEST['cp'];?>">
                                  </div>

                                  <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="number" class="form-control" id="telefono" name="telefono"
                                           placeholder="Introduce tu telefono" value="<?php echo $_REQUEST['telefono'];?>">
                                  </div>
                                
                                  <button type="submit" class="btn btn-default">Enviar</button>
                                </form>
                                <!--Fin de formulario de insercción de datos -->

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
