<?php
$d = new DateTime();
$tipus_de_d = gettype( $d );
echo "La variable \$d 
      conté el valor " . $d->format( "d/m/Y") .
      " i és del tipus $tipus_de_d";
?>

<!--

1.- Executen el codi ens surt el següent: "La variable $d conté el valor 21/09/2018 i és del tipus object" .

2.- La variable $d es del tipus object.

4.-  

-->