<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Matérias</title>
</head>
<body>
  <h2>Cadastro de Matérias</h2>
  <form action="salvar.php" method="POST" id="formulario">
    <div id="campos">
      <div class="box">
        <label>Matéria: <input type="text" name="materia[]"></label><br>
        <label>Professor: <input type="text" name="professor[]"></label><br>
        Curso:
        <label><input type="radio" name="curso[0]" value="info"> Info</label>
        <label><input type="radio" name="curso[0]" value="agro"> Agro</label>
        <label><input type="radio" name="curso[0]" value="meio"> Meio</label>
        <label><input type="radio" name="curso[0]" value="adm"> Adm</label>
      </div>
    </div>
    <button type="button" onclick="adicionarCampo()">+ Adicionar Matéria</button><br>
    <button type="submit" class="botao">Salvar</button>
  </form>
</body>
</html>