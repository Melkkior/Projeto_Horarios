<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estiloAula.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Aula</title>
</head>
<body class="body">

<div class="div">
  <h2>Cadastro de Aula</h2>
  <form action="processa_aula.php" method="POST">
    <label class="a" for="semana">Semana:</label>
    <input class="c" type="text" id="semana" name="semana" maxlength="45" required>

    <label class="a" for="tempo">Tempo:</label>
    <input class="c" type="text" id="tempo" name="tempo" maxlength="45" required>


    <button type="submit">Salvar Aula</button>
  </form>
</div>
</body>
</html>