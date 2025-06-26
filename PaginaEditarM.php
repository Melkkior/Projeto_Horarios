<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Cadastro de Matérias</title>
  <link rel="stylesheet" href="materias/editados/css/PaginaEMM.css">
</head>

<body>
  <div class="container">
      <div class="esquerda"><input class="voltar" type="button" value="VOLTAR"
          onclick="location.href='horarios/PaginaSegunda.php'"></div>
      <div class="direita"><img src="https://cdn-icons-png.flaticon.com/512/20/20093.png" alt=""></div>
    </div>
  <form action="" method="POST" id="formulario">
     <br>
    <div class="carterpie">
      <div class="editado">
        <h3>CADASTRAR TURMAS:</h3>
        <input type="button" class="inputtt" value="CADASTRAR" onclick="location.href='materias/editados/turma.php'">
      </div>
      <div class="editado">
        <h3>CADASTRAR DISCIPLINA:</h3>
        <input type="button" class="inputtt" value="CADASTRAR" onclick="location.href='materias/editados/disciplina.php'">
      </div>
      <div class="editado">
        <h3>CADASTRAR AULAS:</h3>
        <input type="button" class="inputtt" value="CADASTRAR" onclick="location.href='materias/editados/aula.php'">
      </div>
      <div class="aviso">
        <h3>AVISO:</h3>
        <input type="text" class="avisado">
        <input type="submit" class="inputtt2" value="CADASTRAR" onclick="location.href='editados/aula.php'">
      </div>
    </div>
  </form>
</body>

</html>