<?php

$servidor = "localhost";
$usuario = "root";
$senha = "alunoifam";
$banco = "ifam";

$conn = new mysqli($servidor, $usuario, $senha, $banco);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_POST["semana"]) && isset($_POST["curso"]) && isset($_POST["disciplina"])) {
    $semana = $_POST["semana"];
    $curso = $_POST["curso"];
    $disciplina = $_POST["disciplina"];
    $tempo = $_POST["tempo"];

    echo "disciplica: ".$_POST["disciplina"];

    $sql = "INSERT INTO aula (tempo, semana, id_turma, Disciplina_id_disciplina) VALUES ('$tempo','$semana','$curso', '$disciplina')";

    echo $sql;

    $result = $conn->query($sql);
    if ($result) {
        echo "<script>alert('aula cadastrada com sucesso!');</script>";
        echo "<script>location.href='../PaginaEditarM.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar aula: " . $conn->error . "');</script>";
    }

} else {
    $sqll = "SELECT id_turma, id_disciplina ,nome_disciplina, professor_disciplina FROM Disciplina";
    $result = $conn->query($sqll);
    $sql2 = "SELECT id_turma, nome_turma, ano FROM turma";
    $result2 = $conn->query($sql2);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/estiloAula.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro Aula</title>
</head>

<body>

  <form class="h" action="aula.php" method="post">
    <h1>Cadastro de Aula</h1>
    <label>Disciplina:</label>
    <select id="disciplina" name="disciplina">
      <?php
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<option value='" . $row['id_disciplina'] . "'>" . $row['nome_disciplina'] . " - " . $row['professor_disciplina'] . "</option>";
        }
      } else {
        echo "<option value=''>Nenhuma disciplina cadastrada</option>";
      }
      ?>
    </select><br><br>

    <label for="turma">Turma:</label>
    <?php
    if ($result->num_rows > 0) {
      ?>
      <select name="curso">
        <?php
        while ($row = $result2->fetch_assoc()) {
          echo "<option value='" . $row['id_turma'] . "'>" . $row['nome_turma'] . " - " . $row['ano'] . "</option>";
        }
        ?>
      </select>
      <?php
    }
    ?>
    </select><br><br>
    <select id="tempo" name="tempo">
      <option value="1">1ª: 7:10-8:00</option>
    </select><br><br>

    <label>Semana:</label><br>
    <input type="checkbox" name="semana" value="2"> Segunda<br>
    <input type="checkbox" name="semana" value="3"> Terça<br>
    <input type="checkbox" name="semana" value="4"> Quarta<br>
    <input type="checkbox" name="semana" value="5"> Quinta<br>
    <input type="checkbox" name="semana" value="6"> Sexta<br><br>


    <input class="d" type="button" value="Voltar" onclick="location.href='../../PaginaEditarM.php'"><br><br>
    <input class="d" type="submit" value="Cadastrar Aula">
  </form>

</body>

</html>