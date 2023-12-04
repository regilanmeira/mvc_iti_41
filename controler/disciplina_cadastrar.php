<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        /********** CAPTURAR OS VALORES ENVIADOS PELO USUÁRIO  **********/
        $nome = $_POST["txtNome"];
        $periodo = $_POST["txtPeriodo"];
        $ementa = $_POST["txtEmenta"];
        $ch = $_POST["txtCH"];
        $curso = $_POST["selectCurso"];
        /************************************************************ */

        include_once "../model/disciplina.php";

        $disciplina = new Disciplina($nome,$ch,$ementa,$periodo,$curso);

        $disciplina->exibirDetalhes();
        $disciplina->inserir();

?>
    
</body>
</html>