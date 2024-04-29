<?php

$c = @ucfirst($_GET['controller']);

if (!$c)
$c = 'Home';

include("controller/view.php");
include("model/model.php");
include("controller/controller.php");
include("controller/$c.php");




$obj = new $c();

$obj->index(); 

?>