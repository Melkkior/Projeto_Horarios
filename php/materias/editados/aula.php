<?php

$servidor = "localhost";
$usuario = "root";
$senha = "alunoifam";
$banco = "ifam";

if(isset($_POST["semana"]) && $_POST["tempo"]) 
{
    $semana = $_POST["semana"];
    $tempo = $_POST["tempo"];
    
}
?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estiloAula.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Aula</title>
</head>
<body>
  
  <form class="h" action="/salvar_aula" method="post">
    <h1>Cadastro de Aula</h1>
   <label for="disciplina">Disciplina:</label>
    <select id="disciplina" name="disciplina">

      <option value="1">Matemática</option>
      <option value="2">Português</option>
    </select><br><br>

    <label for="turma">Turma:</label>
    <select id="turma" name="turma">


      <option value="1">1ºInfo</option>
      <option value="2">2ºinfo</option>
    </select><br><br>

    
    <label>Semana:</label><br>
    <input type="checkbox" name="semana" value="Segunda"> Segunda<br>
    <input type="checkbox" name="semana" value="Terça"> Terça<br>
    <input type="checkbox" name="semana" value="Quarta"> Quarta<br>
    <input type="checkbox" name="semana" value="Quinta"> Quinta<br>
    <input type="checkbox" name="semana" value="Sexta"> Sexta<br><br>


    <input class="d" type="submit" value="Cadastrar Aula">
  </form>

</body></html>