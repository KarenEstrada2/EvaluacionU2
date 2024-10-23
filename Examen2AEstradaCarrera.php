<?php
/*CBTIS 89
Programa que imprime el IVA, descuento y total de una compra de artivulos.
Karen Estrada
Programación 3°A Matutino*/
echo "ARREGLO PRECIOS";
$arrayPrecios= array(500,400,200,700,100);
foreach($arrayPrecios as $precio){
      echo $precio . " <BR>";	}



$arrayIVA= array();
$longitud= count($arrayPrecios);

for ($i=0; $i <$longitud ; $i++){	
$arrayIVA[$i]=$arrayPrecios[$i]*0.16;
}

for ($i=0; $i <$longitud ; $i++){
echo $arrayIVA[$i]. "<br>";}





?>