<?php 
/*
Escribir código PHP que inicialice un arreglo con los números del 1 al 365. Determine a que mes pertenece el día del año. Y luego calcule cuántos días faltan para que se acabe el año con cada día del año, y muestre el mensaje “Falta poco para el año nuevo” solo si faltan menos de 5 días.
*/

function Generar_Numeros(){

    $Arreglo_Numeros = array();

    for ($i = 1; $i <= 365 ; $i++) { 
        $Arreglo_Numeros[] = $i;
    }

    $numero_aleatorio = array_rand($Arreglo_Numeros,1);

    switch (true) {
        //Enero
        case $numero_aleatorio >= 1 and $numero_aleatorio <=31:
            $dias_restantes = 365 -$numero_aleatorio;
            echo "Usted esta en el mes de Enero y faltan ".$dias_restantes." dias para que acabe el año 2019";
        break;
        //Febrero
        case $numero_aleatorio >= 32 and $numero_aleatorio <=59:
            $dias_restantes = 365 -$numero_aleatorio;
            echo "Usted esta en el mes de Febrero y faltan ".$dias_restantes." dias para que acabe el año 2019";
        break;
        //Marzo
        case $numero_aleatorio >= 60 and $numero_aleatorio <=90:
            $dias_restantes = 365 -$numero_aleatorio;
            echo "Usted esta en el mes de Marzo y faltan ".$dias_restantes." dias para que acabe el año 2019";
        break;
        //Abril
        case $numero_aleatorio >= 91 and $numero_aleatorio <=120:
            $dias_restantes = 365 -$numero_aleatorio;
            echo "Usted esta en el mes de Abril y faltan ".$dias_restantes." dias para que acabe el año 2019";
        break;
        //Mayo
        case $numero_aleatorio >= 121 and $numero_aleatorio <=151:
            $dias_restantes = 365 -$numero_aleatorio;
            echo "Usted esta en el mes de Mayo y faltan ".$dias_restantes." dias para que acabe el año 2019";
        break;
        //Junio
        case $numero_aleatorio >= 152 and $numero_aleatorio <=181:
            $dias_restantes = 365 -$numero_aleatorio;
            echo "Usted esta en el mes de Junio y faltan ".$dias_restantes." dias para que acabe el año 2019";
        break;
        //Julio
        case $numero_aleatorio >= 182 and $numero_aleatorio <=212:
            $dias_restantes = 365 -$numero_aleatorio;
            echo "Usted esta en el mes de Julio y faltan ".$dias_restantes." dias para que acabe el año 2019";
        break;
        //Agosto
        case $numero_aleatorio >= 213 and $numero_aleatorio <=243:
            $dias_restantes = 365 -$numero_aleatorio;
            echo "Usted esta en el mes de Agosto y faltan ".$dias_restantes." dias para que acabe el año 2019";
        break;
        //Septiembre
        case $numero_aleatorio >= 244 and $numero_aleatorio <=273:
            $dias_restantes = 365 -$numero_aleatorio;
            echo "Usted esta en el mes de Septiembre y faltan ".$dias_restantes." dias para que acabe el año 2019";
        break;
        //Octubre
        case $numero_aleatorio >= 274 and $numero_aleatorio <=304:
            $dias_restantes = 365 -$numero_aleatorio;
            echo "Usted esta en el mes de Octubre y faltan ".$dias_restantes." dias para que acabe el año 2019";
        break;
        //Noviembre
        case $numero_aleatorio >= 305 and $numero_aleatorio <=334:
            $dias_restantes = 365 -$numero_aleatorio;
            echo "Usted esta en el mes de Noviembre y faltan ".$dias_restantes." dias para que acabe el año 2019";
        break;
        //Diciembre
        case $numero_aleatorio >= 335 and $numero_aleatorio <=360:
            $dias_restantes = 365 -$numero_aleatorio;
            echo "Usted esta en el mes de Diciembre y faltan ".$dias_restantes." dias para que acabe el año 2019";
        break;
        //Año nuevo
        case $numero_aleatorio >= 361 and $numero_aleatorio <=365:
            $dias_restantes = 365 -$numero_aleatorio;
            echo "Ya faltan $dias_restantes dias para el año nuevo ";
        break;
        default:
            # code...
        break;
    }

    


}


echo Generar_Numeros();

?>