<link rel="stylesheet" href="diseño.css">

<?php  

if($_POST){
    $Numero1= $_POST['1'];
    $Numero2=$_POST['2'];
    $Numero3=$_POST['3'];
notas($Numero1,$Numero2,$Numero3);


}
function notas($n1, $n2 ,$n3){
    $pro=($n1+$n2+$n3)/3;
    $pase =true;
    define("c1",20);
    define("c2",10);

    if($n1>20 ){
        Echo "<h3><br><br>Tu Primer numero es inbalido</h3>";
        $pase = false;

    }
    if($n2>20 ){
        Echo "<h3><br><br>Tu Segundi numero es inbalido</h3>";
        $pase = false;
    }
    if($n3>20 ){
        Echo "<h3><br><br>Tu Terser numero es inbalido</h3>";
        $pase = false;
    }
    if($pro>20 ){
        echo "<h3><br><br>La nota es inbalida por que el promedio maximo es 20</h3>";
        $pase = false;
    }
    
if($pase){
    if(c2>= $pro){
        Echo "<h3><br>Has desaprovado</h3>";
        if($pro<=5){
           echo "<br>Tu nota es una 'D'</h3>";
        }elseif ($pro<=10 && $pro>5) {
            echo "<h3><br>Tu nota es una 'C'</h3>";
        } else {
            # code...
        }
        
    }elseif(c1>= $pro && c2 < $pro){
        Echo "<h3><br>Has aprovado";
        if($pro>10 && $pro<=15){
            echo "<h3><br>Tu nota es una 'B'</h3>";
         }elseif ($pro<=20 && $pro>15) {
             echo "<h3><br>Tu nota es una 'A'</h3>";
         } else {
         }
    }else{
        echo "<h3><br><br>La nota es inbalida por que el promedio maximo es 20</h3>";
    }
    $proi = round($pro, 2);
    echo "<h3><br><br>Tu promedio es :".$proi."</h3>";
   
}}
?>