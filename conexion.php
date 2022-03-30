<?php
$db_host = "127.0.0.1";
$db_usuario = "root";
$db_contra = "";
$db_nombre = "maestros";

$nombre = $_POST['nombre'];
$apellidom = $_POST['apellidom'];
$apellidop = $_POST['apellidop'];
$cedula = $_POST['cedula'];



$connexion = mysqli_connect($db_host,$db_usuario,$db_contra);

if( mysqli_connect_errno())
  {

      echo "Hubo un problema con la base de datos error al conectar";

      exit() ;
  }

  mysqli_select_db($connexion,$db_nombre) or die ("No se encuentra la Base de 
  datos");
 
   mysqli_set_charset($connexion,"utf8");
?>