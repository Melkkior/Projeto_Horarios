<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Matérias</title>
  <link rel="stylesheet" href="css/disciplina.css">
</head>
<body>
  <form action="salvar.php" method="POST" id="formulario">
    <h2>Cadastro de Matérias</h2>
    <div id="campos">
      <div class="box">
        <label>Matéria: <input type="text" name="materia[]"></label>
        <label>Professor: <input type="text" name="professor[]"></label>
        Curso:
        <label><input type="radio" name="curso[0]" value="info"> Info</label>
        <label><input type="radio" name="curso[0]" value="agro"> Agro</label>
        <label><input type="radio" name="curso[0]" value="meio"> Meio</label>
        <label><input type="radio" name="curso[0]" value="adm"> Adm</label>
      </div>
    </div>
    <button type="submit" class="botao">Salvar</button>
  </form>
</body>
</html>