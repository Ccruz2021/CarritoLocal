<html>
    <head>
        <title>Calculo Final</title>
         <link rel="stylesheet" href="estilos/estilos.css">
    </head>
    <body>
         <header>
            
            <img src="20191111_122536%5B1_.png" alt="">
         <nav>
            <ul>
             <li><a href="formularioenviado.htm">Inicio</a></li>
              <li><a href="Contactenos.htm">Contactenos</a></li>
              <li><a href="historia.htm">Historia</a></li>
              <li><a href="">Due&ntilde;os</a></li>
              </ul>
             </nav>
        </header>
        <h3>Gracias Por la compra realizada</h3>
<?php

$precio1=$_POST['precio1'];
$cant1=$_POST['cant1'];
$total=$cant1*$precio1;
if (isset($precio1)){
    echo "-";
}else{
    echo "La cantidad que lleva de calzado Nike es:", $cant1;
echo "<br>";
echo "El total es: $",$total;
echo "<br>";
echo "<br>";
echo "<br>";
}
$precio2=$_POST['precio2'];
$cant2=$_POST['cant2'];
$total2=$cant2*$precio2;
if (isset($precio2)){
   echo "-";
}else{
    echo "La cantidad de Calzado Botin Grasep es: ",$cant2;
echo "<br>";
echo "<br>";
echo "<br>";
echo "El total es: $",$total2;
echo "<br>";
echo "<br>"; 
}
$precio3=$_POST['precio3'];
$cant3=$_POST['cant3'];
$total3=$cant3*$precio3;
if (isset($precio3)){
    echo "-";
}else{
    echo "La cantidad de Calzado NikeBlast es: ",$cant3;
echo "<br>";
echo "<br>";
echo "<br>";
echo "El total es: $",$total3;
echo "<br>";
echo "<br>";
}

$precio4=$_POST['precio4'];
$cant4=$_POST['cant4'];
$total4=$cant4*$precio4;
if (isset($precio4)){
    echo "-";
}else{
     echo "La cantidad de Calzado de mujer Puma es: ",$cant4;
echo "<br>";
echo "<br>";
echo "<br>";
echo "El total es: $",$total4;
echo "<br>";
echo "<br>";
echo "<br>";
$precio5=$_POST['precio5'];
$cant5=$_POST['cant5'];
$total5=$cant5*$precio5;
if (isset($precio5)){
    echo "-";
}else{
     echo "La cantidad de zapato de mujer de Plataforma es: ",$cant5;
echo "<br>";
echo "<br>";
echo "<br>";
echo "El total es: $",$total5;
echo "<br>";
echo "<br>";
echo "<br>";
   
}

echo "El monto final de la compra es:", $total+$total2+$total3+$total4+$total5;
    
?>
 </body>
</html>