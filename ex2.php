<?php
$i = 12;
$f=8.85577;
$b=True;
$c="Hola Mundo";
$tipus_de_i = gettype( $i );
echo "La variable \$i 
      conté el valor $i 
      i és del tipus $tipus_de_i";
echo "<br>";
$tipus_de_f = gettype($f);
$tipus_de_b = gettype($b);
$tipus_de_c = gettype($c);
echo "La variable \$f conte el valor $f i es del tipus $tipus_de_f";
echo "<br>";
echo "La variable \$b conte el valor $b i es del tipus $tipus_de_b";
echo "<br>";
echo "La variable \$c conte el valor $c i es del tipus $tipus_de_c";

      
?>

<!--

3.- Ponemos el contrabarra para poder printar el signo del dolar y que no nos lo interprete como una variable.

4.- La variable es de tipo integer.

5.- La funcion "gettype" sirve para saber de que tipo es la variable.

6.- Creem les variables dels tupus flotant, cadena i boolean.

7.- Modifiquem el codi i posem de que tipus es cada variable.

-->
