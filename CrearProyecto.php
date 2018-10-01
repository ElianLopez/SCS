<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="../imagen/favicon.ico"/>
<head>
<head>
  <title>Nuevo Proyecto</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="font-awesome.css">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-icons.min.css">
  <link rel="stylesheet" href="main.css">

  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/fontawesome-all.min.js"></script>
  <script language="javascript" src="../js/jquery-3.1.1.min.js"></script>
  <script language="javascript" src="../js/jquery-2.1.4.js"></script>
  <script language="javascript">
			$(document).ready(function(){
				$("#cbx_estado").change(function () {

					$('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
					
					$("#cbx_estado option:selected").each(function () {
						id = $(this).val();
						$.post("getMunicipio.php", { id: id }, function(data){
							$("#cbx_municipio").html(data);
						});            
					});
				})
			});
			
			$(document).ready(function(){
				$("#cbx_municipio").change(function () {
					$("#cbx_municipio option:selected").each(function () {
						municipio_id = $(this).val();
						$.post("getLocalidad.php", { municipio_id: municipio_id }, function(data){
							$("#cbx_localidad").html(data);
						});            
					});
				})
			});
		</script>
    <nav class="navbar navbar-light" style="background-color: #2980B9;">
    <h4 class="text-white">Bienvenid@: <?php echo $_SESSION['user'];?></h4>
  <form class="form-inline my-2 my-lg-0" method="post" action="cerrarsesion.php">

      <!--<button type="button" class="btn btn-dark">Bienvenid@: <?php echo $_SESSION['user'];?></button>
      <button class="btn btn btn-dark my-2 my-sm-0" type="submit">Salir</button>-->
  </form>
   </nav>

 
</head>
<body>
<!--Menu-->
<div id="vcliente">
<form action="cliente.php" method="post">
<div class="container-fluid">
   <div class="row">
    <div class="col-lg-3">
  
    <div class="menu">
    <ul>
      <li><a name="use" href=""><span class="fas fa-child"></span> ACS</a></li>
      
      <li><a href=""><span class="fas fa-paste"></span> Nuevo Proyecto</a>
         <ul>
          <li><a href="CrearProyecto.php"><span class="fa fa-plus  "></span> Crear Proyecto</a></li>
          <li><a href="TareaProyectos.php"><span class="fa fa-edit"></span> Tareas de cada proyecto</a></li>
          <li><a href="UssAsignados.php"><span class="fa fa-edit"></span> Usuarios Asignados</a></li>
        </ul>
      </li>

      <li><a href=""><span class="fas fa-users"></span> Registrar Socios</a>
        <ul>
          <li><a href="asesor.php"><span class="fas fa-child    "></span> Nuevo</a></li>
          <li><a href="updateA.php"><span class="fa fa-edit"></span> Actualizar</a></li>
        </ul>
      </li>
        <li><a href=""><span class="fas fa-paste"></span> Solicitud Credito</a>
         <ul>
          <li><a href="solicitud.php"><span class="fa fa-plus  "></span> Crear Solicitud </a></li>
          <li><a href="estadoSoli.php"><span class="fa fa-edit"></span> Status Solicitud </a></li>
        </ul>

      </li>

      <li><a href=""><span class=" fas fa-list-alt "></span> Ahorros</a>
         <ul>
          <li><a href="ahorro.php"><span class=" fa fa-plus  "></span> Crear Cuenta Ahorro </a></li>
          <li><a href="infantil.php"><span class="fa fa-edit"></span> Ahorro Infantil </a></li>
          <li><a href=""><span class="fa fa-edit"></span> Status Ahorro </a></li>
        </ul>
      </li>
      <li><a href="pdfsolicitud.php">Actulizar Usuario</a></li>
      <li><a href="amortizacion.php">Tabla amortizacion</a></li>
      <li><a href="reporte_ive.php">SIB</a></li>
      <li><a href="cerrarsesion.php"><span class="fa fa-home"></span> Cerrar Sesion </a></li>
    </ul>
    
  </div>
    </div>
          <!---Primer Bloque-->
    <div class="col-xs-6 col-sm-4">
    <br>
    <h5>Crear Nuevo Proyecto</h5>
       <div class="col-lg-10">
       <input value="<?php echo $_SESSION['user'];?>" name="empleado" type="hidden" class="form-control form-control-sm" id="validationServer01" required>
        </div> 
    <hr>
        <div class="form-group">
        
         <div class="col-lg-12">
        <label>Nombre del Proyecto</label>
        <input name="emision" type="text" class="form-control form-control-sm" id="validationServer01" required>
        </div>
         <div class="col-lg-12">
        <label>Descripción del Proyecto</label>
        <input name="nom1" type="text" class="form-control form-control-sm" id="validationServer01" required>
        </div>
         <div class="col-lg-12">
        <label>Nombre de la Empresa</label>
        <input name="nom2" type="text" class="form-control form-control-sm" id="validationServer01" required>
        </div>
        <div class="col-lg-12">
        <label>Tareas</label>
        <input name="ape1" type="text" class="form-control form-control-sm" id="validationServer01" required>
        </div>
         <div class="col-lg-12">
        <label>Tipo de Proyecto</label>
        <input name="ape1" type="text" class="form-control form-control-sm" id="validationServer01" required>
        </div>
         
       
         </div>
      </div>
     <!---Segundo Bloque-->
       <br>
    <div class="col-xs-6 col-sm-4">
           <div class="form-group">
           <br><br><br>
        <div class="col-lg-7">
        <label>Fecha Inicio</label>
        <input name="nacimiento" type="date" class="form-control form-control-sm" id="validationServer01" required>
        </div>
        <div class="col-lg-7">
        <label>Fecha Final</label>
        <input name="nacimiento" type="date" class="form-control form-control-sm" id="validationServer01" required>
        </div>
        <div class="col-lg-12">
        <label>Bug</label>
        <input name="profesion" type="text" class="form-control form-control-sm" id="validationServer01" required>
        </div>
            <div class="col-lg-12">
        <label>Descripción del Proyecto</label>
        <input name="email" type="text" class="form-control form-control-sm" id="validationServer01" required>
        </div>
        </div>
        <div class="col-lg-5">
            <button id="bahorro" name="Gaurdar" type="submit" class="btn btn-outline-info">Guardar</button>

        </div>
       </div>
        <br>

        </div>
    </div>
      </div>
  </div>
  </form>
  </div>
<script src="../js/main.js"></script>

</body>
</html>