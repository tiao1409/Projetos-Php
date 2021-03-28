<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
  
    <title>PHP</title>
 
</head>
<body>
<div> 
    <link href="estilo.css" rel ="stylesheet">
    <?php

    echo "<h1> Bem vindo ao Curso de PHP!</h1>";
    echo "<h3> Participante Sebastião da Silva Neto </h3>";
   /* tiulos e nomes com referencias em variaveis
    $nome= "  Participante: Sebastião da Silva Neto  " ;
    $idade= 30;
    $titulo= "Bem vindo ao curso de PHP!";
    echo "<h1> $titulo </h1>";
    echo "<h3> $nome , $idade anos! </h3>"; 
    

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

    Exercicios Aula 7 Operadores Relacionais:
    1) Permitir que o usuario escolha entre somar e multiplicar 2 numeros ( valores setaados na URL).

    $n1 = $_GET ["a"];
    $n2 = $_GET["b"];
   //$tipo = $_GET ["op"];
    // $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2; Calculo de comparacoes
    //echo "Os valores da soma e : $r ";
    // Exercicios 2 somar a media de um aluno e a situação
    $media = ($n1+ $n2)/2;
    echo "A média do Aluno foi: " , $media, " <br/> O Aluno está: ".(($media<6)? "<h3>REPROVADO</h3>":"<h3>APROVADO</h3>");
    
    Ligação formulário HTML PHP, integração HTML5 com PHP via formulário.
    */



    ?>
</body>
</html>