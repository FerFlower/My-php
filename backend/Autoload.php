<?php

function Autoload($clase){
    require_once($clase.".php");
   // echo $clase;
}
spl_autoload_register("autoload");
?>