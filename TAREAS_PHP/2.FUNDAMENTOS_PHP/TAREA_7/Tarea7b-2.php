<?php 
$a=12; //en binario 1100;
$b=23; //en binario 10111;
$A="12"; //en binario 110001110010;
$B="23"; //en binario 110010110011;
//operador ==;
print_r('Operadores "==" ');
print_r($a==$b);
echo "<br> FALSO <br>";
print_r($A==$a);
echo " : CIERTO <br>";
//operador ===;
print_r('Operadores "===" ');
print_r($a===$b);
echo "<br> FALSO <br>";
print_r($a===$a);
echo " : CIERTO <br>";
//operador !=;
print_r('Operadores "!=" ');
print_r($A!=$a);
echo "<br> FALSO <br>";
print_r($a!=$b);
echo " : CIERTO <br>";
//operador <;
print_r('Operadores "<" ');
print_r($b<$a);
echo "<br> FALSO <br>";
print_r($a<$b);
echo " : CIERTO <br>";
//operador <=;
print_r('Operadores "<=" ');
print_r($b<=$a);
echo "<br> FALSO <br>";
print_r($a<=$b);
echo " : CIERTO <br>";
//operador >;
print_r('Operadores ">" ');
print_r($a>$b);
echo "<br> FALSO <br>";
print_r($b>$a);
echo " : CIERTO <br>";
//operador >=;
print_r('Operadores ">=" ');
print_r($a>=$b);
echo "<br> FALSO <br>";
print_r($A>=$a);
echo " : CIERTO <br>";
?>