<?php 
$title_page = "Inicio";
//Llamando al encabezado de pagina
include("template/header.php")
?>

<?php 
//Llamar al archivo navbar
include("template/navbar.php");
?>

<?php 
//Llamar al archivo menu
include("template/menu.php");
?>


<?php 
//Llamar al archivo inventario
include("template/inventario.php");
?>


<?php 
//Llamar al archivo inventario
include("template/empleados.php");
?>

<?php 
//llamando al pie de pagina
include("template/footer.php"); 
?>