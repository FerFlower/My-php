
    <link rel="stylesheet" href="hola.css">
    <?php  

if($_GET){
    $gmail ="@gmail.com";
    $n1= $_GET['1'];
    $n2 = $_GET['2'];
    $n3 = $_GET['3'];
    
    define("c1","Dibidir");
    define("c2","Multiplicar");
    define("c3","Sumar");
    define("c4","Restar");
    
    $operacion;
    //define("gmail","@gmail.com");
    if(c1==$n3){
       $re=$n1/$n2; 
       $operacion = "Divicion";
    }elseif(c2==$n3){
       $re=$n1*$n2; 
       $operacion="Mmultiplicacion";
    }elseif(c3==$n3){
        $re=$n1+$n2; 
        $operacion="Suma";
    }elseif(c4==$n3){
        $re =$n1-$n2; 
        $operacion="Resta";
    }else{
        echo "Este operador no existe";
    }
   
     echo "<h2>Calculadora</h2>";
   
   
    echo "<h3>Tu primer numero es ".$n1."<br>Tu segundo numero es : ".$n2."<br><br>La ".$operacion." es : ".$re;
    
    
}
    ?>