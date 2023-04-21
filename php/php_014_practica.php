
<link rel="stylesheet" href="css/diseño_php.css">
<?php 
class Datos {
    private $Nombre;
    private $Apellido;
    private $Id;

public function get_Nombre(){
    return $this->Nombre;
}
public function set_Nombre($Nombre){
    $this->Nombre = $Nombre;
}
public function get_Apellido(){
    return $this->Apellido;
}
public function set_Apellido($Apellido){
    $this->Apellido=$Apellido;
}    
public function get_ID(){
    return $this->Id;
}
public function set_ID($Id){
    $this->Id=$Id;
}
}
class Notas extends Datos{
    private $Abilidad1 ;
    private $Abilidad2 ;
    private $Abilidad3 ;
    private $Abilidad4 ;
    private $Examen_final;
    private$Travajo_proyeco;
    private $Participacion;

    function __construct($Examen_final,$Travajo_proyeco,$Participacion,$Abilidad1,$Abilidad2,$Abilidad3,$Abilidad4){
        $this->Abilidad1=$Abilidad1;
        $this->Abilidad2=$Abilidad2;
        $this->Abilidad3=$Abilidad3;
        $this->Abilidad4=$Abilidad4;
        $this->Examen_final=$Examen_final;
        $this->Travajo_proyeco=$Travajo_proyeco;
        $this->Participacion=$Participacion;
    }

    public function get_Abilidad1 (){
return $this->Abilidad1;        
    }
    public function get_Abilidad2 (){
return $this->Abilidad2;
    }
    public function get_Abilidad3 (){
return $this->Abilidad3;
    }
    public function get_Abilidad4 (){
return $this->Abilidad4;
    }
    public function get_Examen_final(){
return $this->Examen_final;
    }
    public function get_Travajo_proyeco(){
return $this->Travajo_proyeco;
    }
    public function get_Participacion(){
return $this->Participacion;
    }




    public function Neto_abilidad(){
    $neto1= $this->get_Abilidad1()+$this->get_Abilidad2();
    $Neto2= $this->get_Abilidad3()+$this->get_Abilidad4();
    $neto=$neto1+$Neto2;
    $neto_abilidad= $neto/4;
    return $neto_abilidad;
    //echo " 1".$this->get_Abilidad1()." 2".$this->get_Abilidad2()
    //."3".$this->get_Abilidad3()." 4".$this->get_Abilidad4();
        
    }

    public function Print_nota(){
    $por_Abilidad=$this->Neto_abilidad()*0.5;
    $por_Examen=$this->get_Examen_final()*0.15;
    $por_Travajo=$this->get_Travajo_proyeco()*0.15;
    $por_participacion=$this->get_Participacion()*0.20;



    echo "<h3>Alumno : ".$this->get_Nombre()." ".$this->get_Apellido()."<br>Tu Id es :  ". $this->get_ID()."<br><";
    echo "*************************************************************************************************************<br>";
    echo "Nota de Habilidades Unidad N° 01 :".$this->get_Abilidad1()."<br>Nota de Habilidades Unidad N° 02 :".$this->get_Abilidad2()."<br>Nota de Habilidades Unidad N° 03 :".$this->get_Abilidad3()."<br>Nota de Habilidades Unidad N° 04 :".$this->get_Abilidad4().
         "<br>************************************************************************************************************<br>".
         "Promedo de Notas de Habilidades :".$this->Neto_abilidad()."<br>************************************************************************************************************<br>";
    
    echo"Nota de examen final : ".$this->get_Examen_final()."<br>************************************************************************************************************<br>"."Nota de trabajo proyecto :".$this->get_Travajo_proyeco()."<br>************************************************************************************************************<br>"."Trabajo de participacion :". $this->get_Participacion()."<br>************************************************************************************************************<br>";
    $Promedio_Final = $por_Abilidad+$por_Examen+$por_Travajo+$por_participacion;
   // echo "<h2>Tu Promedio final es de -->" .$Promedio_Final."<br></h2>";
   //echo $this->Neto_abilidad()." -".$por_Examen."-".$por_Travajo." -".$por_participacion;
 echo "<br>Porsentage de Nota: <br><br> Nota de Habilidades % 50 : <br>".$por_Abilidad." Puntos<br><br> Nota de Examen Final % 15 :<br>".$por_Examen." Puntos <br><br>Nota de Trabajo % 15 : <br> ".$por_Travajo." Puntos <br><br>Nota de Participacion % 20 : <br> ".$por_participacion." Puntos <br>"."<br>************************************************************************************************************<br>";
 echo "Tu Promedio final : " .$Promedio_Final."<br>************************************************************************************************************<br>";
}
}
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        $Abilidad1=20;
        $Abilidad2=20;
        $Abilidad3=20;
        $Abilidad4=20;
        $Examen_final=20;
        $Travajo_proyeco=0;
        $Participacion=0;

$nota = new Notas($Examen_final,$Travajo_proyeco,$Participacion,$Abilidad1,$Abilidad2,$Abilidad3,$Abilidad4);
$nota->set_Nombre("Diego");
$nota->set_Apellido("Quispe");
$nota->set_ID("168595");
$nota->Print_nota();


?>
