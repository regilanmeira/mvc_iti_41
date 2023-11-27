<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       include_once "../model/disciplina.php";

       $disciplina = new Disciplina("Análise e Desenvolvimento de Sistemas","60 h","Lorem Ipsum Dolor....","4º Ano","Informática");

       $disciplina->exibirDetalhes();
    ?>
</body>
</html>