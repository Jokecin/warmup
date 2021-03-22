<?php 
print_r($_POST);
$dinero = $_POST["valor"]*$_POST["cantidad"]; 
if($_POST["monto"] > 0 && $_POST["cantidad"] > 0 && $_POST["valor"] > 0 && $dinero >= $_POST["monto"] ){
    $TIRH = ($dinero*100)/$_POST["monto"]; 
    $TIRH = $TIRH - 100;
    //print($TIRH);
    //Calculo del TIR hipotetico 
    $VAN = -$_POST["monto"];
    $i = 1;
    while($i <= $_POST["cantidad"]){
        $sumatoria = $_POST["valor"]/pow((1 + $TIRH),$i);
        $VAN = $VAN + ($sumatoria);
        $i = $i + 1;
    }
    //print($VAN);
    //Calculo del VAN con el TIR hipotetico
    if($VAN > 0){ //VAN++ = TIR++
        $TIR = $TIRH + 1;
        $VAN2 = -$_POST["monto"];
        $VAN2F = 0;
        while($VAN2F < 0){
            $i = 1;
            while($i <= $_POST["cantidad"]){
                $sumatoria = $_POST["valor"]/pow((1 + $TIR),$i);
                $VAN2 = $VAN2 + ($sumatoria);
                $i = $i + 1;
            }
            $TIR = $TIR + 1;
            $VAN2F = $VAN2;
        }
    }
    else{ //VAN-- = TIR--
        $TIR = $TIRH - 1;
        $VAN2 = -$_POST["monto"];
        $VAN2F = 0;
        while($VAN2F > 0){
            $i = 1;
            while($i <= $_POST["cantidad"]){
                $sumatoria = $_POST["valor"]/pow((1 + $TIR),$i);
                $VAN2 = $VAN2 + ($sumatoria);
                $i = $i + 1;
            }
            $TIR = $TIR - 1;
            $VAN2F = $VAN2;
        }
    }
    //print($TIR);
    //print($VAN2F);
    //Calculo 2 VAN para el intervalo
    $TIRF = $TIRH + ($TIR - $TIRH)*($VAN/($VAN - $VAN2F));
    print($TIRF);
    //Calculo del TIR con los dos VAN anteriores 
    
    
    $TASAF = pow((1 + $TIRF),12) - 1;
    //print($TASAF);
    //Cambio de tasa de mensual a anual 
    
}
else{
    header("Location: /");
}
?>