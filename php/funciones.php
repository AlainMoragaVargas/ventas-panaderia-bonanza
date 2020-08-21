<?php

function convertir_fecha($fecha)
{
    $largo_string=strlen($fecha);
     for($i=1; $i<$largo_string; $i++)
     {
        $primer_digito_D=$fecha[8];
        $segundo_digito_D=$fecha[9];
        $dia=$primer_digito_D.$segundo_digito_D;
                            
        $primer_digito_M=$fecha[5];
        $segundo_digito_M=$fecha[6];
        $mes=$primer_digito_M.$segundo_digito_M;
                            
        $primer_digito_Y=$fecha[0];
        $segundo_digito_Y=$fecha[1];
        $tercer_digito_Y=$fecha[2];
        $cuarto_digito_Y=$fecha[3];
                
        $year=$primer_digito_Y.$segundo_digito_Y.$tercer_digito_Y.$cuarto_digito_Y;
     }
        echo $dia."/".$mes."/".$year; 
}

//formateo de fecha

   $bMeses = array("void","enero", "febrero", "marzo", "abril", "mayo", "junio", "julio",
   "agosto", "septiembre", "octubre", "noviembre", "diciembre");
   $bDias = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
   $fecha = getdate();

   $dias = $bDias[$fecha["wday"]];
   $meses = $bMeses[$fecha["mon"]]; 
   $ano = $fecha["year"];

   $actual = "$dias ".$fecha["mday"]." de ".$meses." "."del "."$ano";

?>