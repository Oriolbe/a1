<?php
// Iniciar sesión y mantenerla
session_start();
// Quitar valor a variables session, pero sigue abierta
session_unset();
// Se destruye la variable de sesión y la cookie
session_destroy();
// Redirige a Index
header ('Location:index.php');
