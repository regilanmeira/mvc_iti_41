<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css" />
</head>
<body>
   <form action="../controler/disciplina_cadastrar.php" method="post">

   <ul>
        <li>Nome da disciplina</li>
        <li>
            <input maxlength="30" required type="text" name="txtNome" placeholder="Informe seu nome e sobrenome"/>
        </li>
        <li>Carga horária</li>
        <li>
            <input type="text" name="txtCH"/>
        </li>
        <li>Ementa</li>
        <li>
            <textarea name="txtEmenta"></textarea>
        </li>
        <li>Período</li>
        <li>
            <input type="text" name="txtPeriodo"/>
        </li>
        <li>Curso</li>
        <li>
            <select name="selectCurso">
                <option value="INFO">Informática</option>
                <option value="EDIF">Edificações</option>
                <option value="SEGU">Segurança do trabalho</option>

            </select>
        </li>

        <button type="submit">
            Cadastrar
        </button>
       
   </ul>
    </form>
</body>
</html>