<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
    <link href="estilo.css" rel ="stylesheet">
</head>
<body>
     <h1>Valores</h1>
     <div> 

<?php

$valor = $_GET["v"];
$rq = sqrt($valor);
echo" <h3>A raiz quadrada de $valor é igual a " .number_format($rq,2) , "<br/>";

?>
<a href="formularioModeloHtml.html">Voltar</a>

</div>

</body>
</html>