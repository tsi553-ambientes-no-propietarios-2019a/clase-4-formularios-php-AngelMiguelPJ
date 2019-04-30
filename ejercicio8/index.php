<?php
/*
- Escribir código PHP que inicialice un arreglo con los números del 1 al 365. Determine a que mes pertenece cada día del año (suponiendo un año no bisiesto) y muestre por pantalla la lista con el mes como encabezado seguido de la lista de los días que pertenecen a ese mes. 
- Utilizar HTML y CSS para dar estilo a la lista. Cada mes debe mostrarse de diferente color junto con la lista de días. Los meses deben aparecer con negrita. Pista: se puede utilizar elementos ul y li para mostrar la lista.

*/



function Dias_de_Mes(){

    $Arreglo_Dias = array(" ",);
    for ($i=1; $i <=31 ; $i++) { 
        
        $Arreglo_Dias [] = $i;
    };
foreach ($Arreglo_Dias as $Dias => $Dias_Mes) {
    echo '<th>'.$Dias_Mes.'</th>';
}

}


$Arreglo_Numeros = array();
    
for ($i = 1; $i <= 365 ; $i++) { 
        $Arreglo_Numeros[] = $i;
};
   


function Enero(){
    
    global $Arreglo_Numeros;
    $Enero = array_slice($Arreglo_Numeros,0,31);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia #".$numero.'</th>';
    }

}

function Febrero(){
    global $Arreglo_Numeros;

    $Enero = array_slice($Arreglo_Numeros,31,28);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia #".$numero.'</th>';
    }

}

function Marzo(){
    global $Arreglo_Numeros;

    $Enero = array_slice($Arreglo_Numeros,59,31);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia #".$numero.'</th>';
    }

}

function abril(){
    global $Arreglo_Numeros;

    $Enero = array_slice($Arreglo_Numeros,90,30);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia #".$numero.'</th>';
    }

}

function mayo(){
    global $Arreglo_Numeros;

    $Enero = array_slice($Arreglo_Numeros,120,31);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia #".$numero.'</th>';
    }

}

function junio(){
    global $Arreglo_Numeros;

    $Enero = array_slice($Arreglo_Numeros,151,30);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia #".$numero.'</th>';
    }

}

function julio(){
    global $Arreglo_Numeros;

    $Enero = array_slice($Arreglo_Numeros,181,31);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia #".$numero.'</th>';
    }

}

function agosto(){
    global $Arreglo_Numeros;

    $Enero = array_slice($Arreglo_Numeros,212,31);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia #".$numero.'</th>';
    }

}

function septiembre(){
    global $Arreglo_Numeros;

    $Enero = array_slice($Arreglo_Numeros,243,30);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia #".$numero.'</th>';
    }

}

function octubre(){
    global $Arreglo_Numeros;

    $Enero = array_slice($Arreglo_Numeros,273,31);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia #".$numero.'</th>';
    }

}

function noviembre(){
    global $Arreglo_Numeros;

    $Enero = array_slice($Arreglo_Numeros,304,30);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia #".$numero.'</th>';
    }

}

function Diciembre(){
    global $Arreglo_Numeros;

    $Enero = array_slice($Arreglo_Numeros,334,31);
    
    foreach ($Enero as $Dia => $numero) {
        echo '<th>'."Dia #".$numero.'</th>';
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1" align="center">
    <thead style ="Background-color : green; color: white">
        <tr>
            <?php
              echo Dias_de_Mes();
            ?>
        </tr>
    </thead>
    <tbody>
    <tr>
      <th scope="row" style="background-color: #FE6B4C; color: black">Enero</th>
          <?php
            echo Enero();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #FE9B4C; color: black">Febrero</th>
          <?php
            echo Febrero();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #FEDD4C; color: black">Marzo</th>
          <?php
            echo Marzo();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #E0FE4C; color: black">Abril</th>
          <?php
            echo Abril();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #ACFE4C; color: black">Mayo</th>
          <?php
            echo mayo();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #4CFE56; color: black">Junio</th>
          <?php
            echo junio();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #4CFEA8; color: black">Julio</th>
          <?php
            echo julio();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #4CFEF1; color: black">Agosto</th>
          <?php
            echo agosto();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #4CB5FE; color: black">Septiembre</th>
          <?php
            echo septiembre();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #4C5CFE; color: black">Octubre</th>
          <?php
            echo octubre();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #8B4CFE; color: black">Noviembre</th>
          <?php
            echo noviembre();
          ?> 
    </tr>
    <tr>
      <th scope="row" style="background-color: #FE4CE4; color: black">Diciembre</th>
          <?php
            echo Diciembre();
          ?> 
    </tr>
        
    </tbody>
</table>



</body>
</html>