<?php

    require('conexiondb.php');
    $output = exec("ping 8.8.8.8");
    $arr = explode(" ",$output);
    $output = $arr[sizeof($arr)-1]; 

    $ping = str_replace("ms","",$output);
    if($ping != 0 ){
        $dia = date("Y-m-d");
    
        $sql = "INSERT INTO datos_ping(dia,ping) values('$dia','$ping')";
        $conn->query($sql);
        $conn->close();
    
    }
   
?>