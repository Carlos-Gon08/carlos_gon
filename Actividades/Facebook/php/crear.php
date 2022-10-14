<?php
$nom= $_POST["nombre"];
$apelli= $_POST["apellido"];
echo "Hola $nom $apelli";
echo "<br>";
$corre = $_POST["correo"];
echo " Tu correo es $corre";
echo "<br>";
$eda = $_POST["make"];
echo " Tienes $eda años";
echo "<br>";
$sex = $_POST["sexo"];
echo " Eres $sex ";
echo "<br>";
$naci = $_POST["nacimiento"];
echo " Naciste el dia $naci";
echo "<br>";
$contra = $_POST["contraseña"];
echo " Tu contraseña ha sido guardada";
echo "<br>";
echo "<a href='../html/crear.html'> Regresar </a>";

?>