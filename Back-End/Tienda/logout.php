<?php
//Desarrollado por Yaser Yamil Meshir Vargas @Sacerte
session_start();
// ---
// la tarea de este archivo es eliminar todo rastro de cookie

// -- eliminamos el usuario
if(isset($_SESSION['client_id'])){
	unset($_SESSION['client_id']);
}

session_destroy();
//estemos donde estemos nos redirije al index
print "<script>window.location='./';</script>";
?>