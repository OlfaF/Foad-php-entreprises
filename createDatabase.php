<?php
include 'fonctions.php';
require 'connexiondb.php'; 

createDatabase($pdo,'entreprises.sql');

redirect('/index.php');