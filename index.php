<?php
include "fonctions.php";
require "connexiondb.php";
require "routes.php";

$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? 'home';

if (!array_key_exists($page, $routes)) {
    redirect('404.php');
}

redirect($routes[$page]);