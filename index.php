<?php 

require_once ("config/config.php");

$tuco = new Usuario();

$tuco->loadById(2);

echo $tuco;

?>