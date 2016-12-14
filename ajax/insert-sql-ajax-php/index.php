<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert Data Into MySQL: jQuery + AJAX + PHP</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>


 <div class="container-fluid">
  <div class="row vertical-offset-100">
   <div class="col-md-4 col-md-offset-4">


 <form id="myForm" action="insert.php" method="post">
     <div  class="form-group">
      <label class="control-label " for="name">
       Nombre
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user">
        </i>
       </div>
       <input class="form-control" id="nom_asis" name="nom_asis" placeholder="Danae" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="name1">
       Apellido Paterno
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-male">
        </i>
       </div>
       <input class="form-control" id="ap_paterno" name="ap_paterno" placeholder="Ray" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="name2">
       Apellido Materno
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-female">
        </i>
       </div>
       <input class="form-control" id="ap_materno" name="ap_materno" placeholder="Lugo" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="email">
       Email
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-envelope">
        </i>
       </div>
       <input class="form-control" id="email" name="email" placeholder="dana.ray@gmail.com" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="tel">
       Tel&eacute;fono #
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-phone">
        </i>
       </div>
       <input class="form-control" id="telefono" name="telefono" placeholder="2226548790" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="select">
       Universidad
      </label>
      <select class="select form-control" id="select" name="universidad">
       <option value="BUAP - BENEM&Eacute;RITA UNIVERSIDAD AUT&Oacute;NOMA DE PUEBLA">
        BUAP - BENEM&Eacute;RITA UNIVERSIDAD AUT&Oacute;NOMA DE PUEBLA
       </option>
       <option value="CESES - CENTRO DE INVESTIGACI&Oacute;N Y ESTUDIOS SUPERIORES EN ESTOMATOLOG&Iacute;A Y SALUD">
        CESES - CENTRO DE INVESTIGACI&Oacute;N Y ESTUDIOS SUPERIORES EN ESTOMATOLOG&Iacute;A Y SALUD
       </option>
       <option value="CEUNI - CENTRO UNIVERSITARIO INTERAMERICANO">
        CEUNI - CENTRO UNIVERSITARIO INTERAMERICANO
       </option>
       <option value="IUFU - INSTITUTO UNIVERSITARIO FRANCISCO UGALDE">
        IUFU - INSTITUTO UNIVERSITARIO FRANCISCO UGALDE
       </option>
       <option value="Otro">
        Otro
       </option>
      </select>
     </div>
     <div class="form-group ">
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-graduation-cap">
        </i>
       </div>
       <input class="form-control" id="universidad" name="text" type="text" placeholder="BUAP"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="select1">
       Semestre
      </label>
      <select class="select form-control" id="id_grado" name="id_grado">
         <option value="1">
          1
        </option>
        <option value="2">
          2
        </option>
        <option value="3">
          3
        </option>
        <option value="4">
          4
        </option>
        <option value="5">
          5
        </option>
        <option value="6">
          6
        </option>
        <option value="7">
          7
        </option>
        <option value="8">
          8
        </option>
        <option value="9">
          9
        </option>
        <option value="10">
          10
        </option>
      </select>
     </div>

     <div class="form-group ">
        <label class="control-label requiredField" for="name1">
          Matr&iacute;cula
          <span class="asteriskField ">
            *
          </span>
        </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-shield">
        </i>
      </div>
        <input class="form-control" id="registro" name="registro" placeholder="201634124" type="text"/>
      </div>
    </div>
     <div class="form-group" id="tipo_asist">
      <label class="control-label requiredField" for="radio">
       Tipo
        <span class="asteriskField ">
        *
        </span>
      </label>
      <div class="">
       <label class="radio-inline">
        <input name="tipo_asist" type="radio" value="1"/>
        1
       </label>
       <label class="radio-inline">
        <input name="tipo_asist" type="radio" value="2"/>
        2
       </label>
       <label class="radio-inline">
        <input name="tipo_asist" type="radio" value="3"/>
        3
       </label>
       <label class="radio-inline">
        <input name="tipo_asist" type="radio" value="4"/>
        4
       </label>
      </div>
     </div>
     
     <div class="form-group">
      	<button class="btn btn-primary btn-block" id="sub">
      		<span class="glyphicon glyphicon-cloud-upload"></span> Subir
      	</button>
     </div>

    </form>
   </div>
  </div>
 </div>
</div>

	<span id="result"></span><div class="bootstrap-iso">



	<script src="my_script.js" type="text/javascript"></script>
</body>
</html>