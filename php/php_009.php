<link rel="stylesheet" href="hola.css">
<?php  

if($_POST){
    $n1= $_POST['1'];
    $n2 = $_POST['2'];
    $n3 = $_POST['3'];
    $pro=($n1+$n2+$n3)/3;
    $pase =true;
    define("c1",20);
    define("c2",10);

    if($n1>20 ){
        Echo "<br><br>Tu Primer numero es inbalido";
        $pase = false;

    }
    if($n2>20 ){
        Echo "<br><br>Tu Segundi numero es inbalido";
        $pase = false;
    }
    if($n3>20 ){
        Echo "<br><br>Tu Terser numero es inbalido";
        $pase = false;
    }
    if($pro>20 ){
        echo "<br><br>La nota es inbalida por que el promedio maximo es 20";
        $pase = false;
    }
    
if($pase){
    if(c2>= $pro){
        Echo "<br>Has desaprovado";
        if($pro<=5){
           echo "<br>Tu nota es una 'D'";
        }elseif ($pro<=10 && $pro>5) {
            echo "<br>Tu nota es una 'C'";
        } else {
            # code...
        }
        
    }elseif(c1>= $pro && c2 < $pro){
        Echo "<br>Has aprovado";
        if($pro>10 && $pro<=15){
            echo "<br>Tu nota es una 'B'";
         }elseif ($pro<=20 && $pro>15) {
             echo "<br>Tu nota es una 'A'";
         } else {
         }
    }else{
        echo "<br><br>La nota es inbalida por que el promedio maximo es 20";
    }
    $proi = round($pro, 2);
    echo "<br><br>Tu promedio es : ".$proi;
   
    
    
}}
    ?>