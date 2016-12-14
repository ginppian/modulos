# INSERT SQL AJAX PHP
<img src="screenshoot1.png" alt="HTML5 Icon" >

#Descripción
Insertar en una base de datos de MySQL a través de un script en PHP haciendo uso de AJAX para que no cambie de página.

Tenemos los siguientes archivos:
* conexion.php
* index.php
* insert.php
* my_script.js

##index.php

En este archivo tenemos un formulario `form` con los siguientes atributos `<form id="myForm" action="insert.php" method="post">`.
Hasta abajo del formulario tenemos un boton:

	<form id="myForm" action="insert.php" method="post">
		...
     	<div class="form-group">
      		<button class="btn btn-primary btn-block" id="sub">
      			<span class="glyphicon glyphicon-cloud-upload"></span> Subir
      		</button>
     	</div>
     </form>

Al hacer click en el boton se ejecuta nuestro Javascript ya que identifica al boton con el `id="sub"` para que a su vez este ejecute el script en php `insert.php`.

##my_script.js

Este archivo cuenta sólo con dos funciones:

	$("#sub").click( function() {
	 $.post( $("#myForm").attr("action"), 
	         $("#myForm :input").serializeArray(), 
	         function(info){ $("#result").html(info); 
	  });
	});

	$("#myForm").submit( function(){
		return false;
	});

`.post` es una función en [JQuery](https://jquery.com/download/) la cual al ejecutar el click ejecuta la `attr("action")` que tiene el formulario `insert.php`, la siguiente linea serializa todos los campos en un array y la última ejecuta una respuesta si se realizó correctamente el script en php en este caso toma un `span` y le asigna un mensaje.

La siguiente función bloquea `submit` pues estamos enviando los elementos a través del `button` y el `javascript`.

##insert.php y conexion.php

Ejecutan la sentencia `SQL` como se haría normalmente.



