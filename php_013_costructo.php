<link rel="stylesheet" href="diseño_php.css">

<?php 

class perosona{
    
    //creando el atributo puede se -> Private
    private $Nombre;
    private $Edad;
    private $Altura;
    //comportamiento

    function __construct($Nombre,$Edad,$Altura){
        $this->Nombre=$Nombre;
        $this->Edad=$Edad;
        $this->Altura=$Altura;
    }
    public function set_edad($Edad){
        $this->Edad = $Edad;

    }

    public function get_edad(){
        return $this->Edad;
    }
    public function set_nombre($Nombre){
        $this->Nombre = $Nombre;
    }

    public function get_nombre(){
        return $this->Nombre;
    }
    public function set_altura($Altura){
        $this->Altura = $Altura;
    }

    public function get_altura(){
        return $this->Altura;
    }
    public function PrintDatos(){
        echo"<h2>Hola soy ".$this->get_nombre()." tengo ".$this->get_edad()." y mido ".$this->Altura."<br></h2>";
    }

}
$My = new perosona("Diego Quispe",18,"1.72");
$My ->PrintDatos();