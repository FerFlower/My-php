<link rel="stylesheet" href="diseño_php.css">

<?php 

class perosona{
    
    //creando el atributo puede se -> Private
    public $Nombre;

    //comportamiento

    public function My_name($Denombre){
        $this->Nombre = $Denombre;

    }

    public function print_name(){
        echo "<h2>Hola soy ".$this->Nombre."</h2><br>";
    }


}


$pedro= new perosona();

$pedro->My_name("Pedro");
$pedro->print_name();

$oscar= new perosona();

$oscar->My_name("Oscar");
$oscar->print_name();
?>

