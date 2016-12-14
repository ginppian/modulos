<?php
	include('conexion.php');

	$nom_asis = isset($_POST['nom_asis']) ? $_POST['nom_asis'] : null;
	$tipo_asist = isset($_POST['tipo_asist']) ? $_POST['tipo_asist'] : null;
	$id_grado = isset($_POST['id_grado']) ? $_POST['id_grado'] : null;
	$registro = isset($_POST['registro']) ? $_POST['registro'] : null;

 //    include('conexion.php');
 //    //$sql="INSERT INTO asistente (nom_asis, ap_paterno, ap_materno, email, telefono, celular, universidad, tipo_asist, id_grado, registro) VALUES ('$nom_asis', '$ap_paterno', '$ap_materno', '$email', '$telefono', '$celular', '$universidad', '$tipo_asist', '$id_grado', '$registro')";
    $sql="INSERT INTO asistente (nom_asis, tipo_asist, id_grado, registro) VALUES ('$nom_asis', '$tipo_asist', '$id_grado', '$registro')";
    // echo $sql;

    if ($conn->query($sql) === TRUE) {
     echo "se agrego";
    } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
    }
	
	$conn->close();

?>