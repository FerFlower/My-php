<link rel="stylesheet" href="diseño_php.css">

<?php 

class perosona{
    
    //creando el atributo puede se -> Private
    private $Nombre;
    private $Edad;
    //comportamiento

    public function set_edad($Myedad){
        $this->Edad = $Myedad;

    }

    public function get_edad(){
        return $this->Edad;
    }
    public function set_nombre($Mynombre){
        $this->Nombre = $Mynombre;

    }

    public function get_nombre(){
        return $this->Nombre;
    }

    public function PrintDatos(){
        echo "Hola soy ".$this->Nombre."<br>";
    }

}
class Trabajador  extends perosona{
private $puesto;

public function set_puesto($puesto){
    $this->puesto = $puesto;
}
public function get_puesto(){
    return $this->puesto;
}

public function print_trabajo(){
    echo "<h2>Hola soy ".$this->get_nombre()." tengo ".$this->get_edad()." y mi puesto es de ".$this->puesto."<br></h2>";
} 
}


$De =new Trabajador;

$De->set_edad(18);
$De->set_nombre("Diego");
$De->set_puesto("Estudiante");
$De->print_trabajo();
echo "<h2>".$De->get_nombre()."</h2>";


/*$pedro= new perosona();

$pedro->My_name("Pedro");
$pedro->print_name();

$oscar= new perosona();

$oscar->My_name("Oscar");
$oscar->print_name();
*/

?>

