<?php


$input = $argv[1];
$getal = intval($input);




if( $getal > 0){
    echo($getal." x 1 euro");
}
else{
    echo("u krijgt geen wisselgeld");
}

?>