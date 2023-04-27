<?php
function Autoload($clase){
    require_once($clase.".php");
    echo $clase."<BR>";
}
spl_autoload_register("autoload");
?>