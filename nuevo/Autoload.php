<?php
function Autoload($clase){
    require_once($clase.".PHP");
    echo $clase."<BR>";
}
sql_autoload_register("autoload");
?>
