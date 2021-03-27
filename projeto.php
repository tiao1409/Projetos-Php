<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
  
    <title>PHP</title>
 
</head>
<body>
<div> 
    <h1>PHP</h1>
    <link href="estilo.css" rel ="stylesheet">
 
    <?php

   echo  " <h2> Bem vindo ao curso de PHP! </h2>" ;
  //  Assuntos abaixo aula 4 ( lidos variaves e concatenções
   
   $n=4;
   
    $nome= "Autor: Tião Silva Neto";
    $idade= 30;
    
    echo "$nome , $idade anos!"; 
    
/*
    $n1 = 7;
    $n2 = 2;
    $n6 = 5.4;
    $n3 = $n1 + $n2;
    $n5 = 8000;
    $n4 = ($n1 + $n2)/2;
  
 //Abaixo codigos de Aulas de Operadores Aritimeticos

    echo "A SOMA ENTRE OS NUMEROS $n1 E $n2 É  $n3 ";
    echo "<br/>";
        echo "<br/> A SOMA ENTRE OS NUMEROS ".($n1+$n2);
        echo "<br/>";
        echo "<br/> A subtração dos numeros são: ".($n1-$n2);
        echo "<br/>";
        echo "<br/> A multiplicação dos numeros são: ".($n1*$n2);
        echo "<br/>";
        echo "<br/> A divisão dos numeros são: ".($n1/$n2);
        echo "<br/>";
        echo "<br/> O modulo dos numeros são: ".($n1%$n2);
        echo "<br/>";
        echo "<br/> A Média dos numeros são: ".$n4;
        echo "<br/>";
        echo "<br/> O Valor absoluto dos numeros são: ".abs($n6);
        echo "<br/>";
        echo "<br/> O valor do numero elevado $n1<sup>$n2</sup> =  ".pow($n1, $n2);
        echo "<br/>";
        echo "<br/> A raiz quadrada do numero $n3 é = " . sqrt($n3);
        echo "<br/>";
        echo "<br/> O valor arrendondado do numero é : ".round($n6); // ceil arredonda para cima floor arredonda para baixo
        echo "<br/>";
        echo "<br/> A parte interia do numeros : ".intval($n6);
        echo "<br/>";
        echo "<br/> O numero formatado em moedas e milhar: " .number_format($n5,2,",", ".");echo 
        "<br/>";


// aula de operadores

echo "<br>";
    $preco = $_GET["p"];//Formula para Digitar o valor na URL do navegador
    $preco1= $_GET["p"];
    echo " O valor do produto e de :" . number_format($preco,2);
    $preco += $preco*10/100;
    echo "<br> O novo valor com aumento de 10% e de" .number_format($preco ,2);
    $preco1 -= $preco1*10/100;
    echo "<br> O valor do produto com desconto de 10% é de: ".number_format($preco1,2);


*/


    ?>
</body>
</html>