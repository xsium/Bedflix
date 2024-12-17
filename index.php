<?php
require ("./model/connect.php");
// Get the URL path after "Bedflix/"
$requestUri =parse_url( $_SERVER['REQUEST_URI'])['path'];
if($requestUri =="/Bedflix/"){
    require 'control/accueil_controller.php';
}
else if($requestUri =="/Bedflix/index"){
    require 'control/accueil_controller.php';
}
else if ($requestUri =="/Bedflix/connexion"){
    require 'control/connexion_controller.php';
}
else if ($requestUri =="/Bedflix/inscription"){
    require 'control/inscription_controller.php';
}
else if ($requestUri =="/Bedflix/film"){
    require 'control/film_controller.php';
}
else if ($requestUri =="/Bedflix/serie"){
    require 'control/serie_controller.php';
}
else if ($requestUri =="/Bedflix/connexion.php"){
    require 'control/connexion_controller.php';
}
else if ($requestUri =="/Bedflix/deco"){
    require 'model/deco.php';
}

?>