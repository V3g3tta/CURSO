<?php
//operadores arismeticos
$numero1 = 55;
$numero2 = 33;

echo 'suma:'. ($numero1+$numero2).'<br/>';
echo  'resta'. ($numero1-$numero2).'<br/>';
echo  'multiplicaion'. ($numero1*$numero2).'<br/>';
echo  'divicion'. ($numero1/$numero2).'<br/>';
echo  'resto'. ($numero1%$numero2).'<br/>';

//operadores incremento y descremento

$year = 2022;
//incremento
//$year = $year + 1;
$year ++;
// descremento
//$year = $year - 1;
$year --;
// pre-incremento 
// year = 1 + $year;

//pre-descremento 
// year = 1 - $year;
echo $year;


//operadores de asignacion

$edad = 55;
echo $edad;
//edad= $edad + 5;
echo ($edad+=5);
echo ($edad-=5);
echo ($edad*=5);
echo ($edad/=5);

