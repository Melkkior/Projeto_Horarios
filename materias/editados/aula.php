<?php

$servidor = "localhost";
$usuario = "root";
$senha = "alunoifam";
$banco = "ifam";

$curso="";

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

    $sql = "INSERT INTO aula (tempo, dia, id_turma, Disciplina_id_disciplina) VALUES ('$tempo','$semana','$curso', '$disciplina')";

    echo $sql;

    $result = $conn->query($sql);
    if ($result) {
        echo "<script>alert('aula cadastrada com sucesso!');</script>";
        echo "<script>location.href='../../PaginaEditarM.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar aula: " . $conn->error . "');</script>";
    }

} else {
  if (isset($_POST["b"])) {
    $curso = $_POST["curso"];
    $sql = 'select id_turma, id_disciplina ,nome_disciplina, professor_disciplina from Disciplina where id_turma = '.$_POST["curso"];
    $result = $conn->query($sql);
   } else {
    $sqll = "SELECT id_turma, id_disciplina ,nome_disciplina, professor_disciplina FROM Disciplina";
    $result = $conn->query($sqll);
    }
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

 <script>
  document.getElementById('a').addEventListener('submit', function (e) {
    const checkboxes = document.querySelectorAll('input[name="semana"]');
    const algumMarcado = Array.from(checkboxes).some(checkbox => checkbox.checked);

    if (!algumMarcado) {
      e.preventDefault(); 
      alert('Por favor, selecione o dia em que dia haverá a aula.');
    }
  });

  function buscarTurmapordisciplina() {
      document.getElementById('b').value="1";
      document.getElementById('a').method = "post";
      document.getElementById('a').action = "aula.php";
      document.getElementById('a').submit();
        
  }
</script>

<form class="h" action="aula.php" method="post" id="a">


    <input type="hidden" id="b" name="b" value="">

    <h1>Cadastro de Aula</h1>

     <label for="turma">Turma:</label>
    <?php
    if ($result2->num_rows > 0) {
      ?>


      <select name="curso" required onchange="buscarTurmapordisciplina();">
        <?php
        
        while ($row = $result2->fetch_assoc()) {
          if ($curso == $row['id_turma']){
              echo "<option value='" . $row['id_turma'] . "'"." selected ".">" . $row['nome_turma'] . " - " . $row['ano'] . "</option>";
          }
          else
              echo "<option value='" . $row['id_turma'] . "'>" . $row['nome_turma'] . " - " . $row['ano'] . "</option>";
        }
        ?>

      </select>
      <?php
    }
    ?>
    </select><br><br>
    <label>Disciplina:</label>
    <select id="disciplina" name="disciplina" required>
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
  <label>Horários tempo </label>
    <select id="tempo" name="tempo" required>
      <option value="1">1ª: 7:10-8:00</option>
      <option value="2">2ª: 8:00-8:50</option>
      <option value="3">3ª: 9:10-10:00</option>
      <option value="4">4ª: 10:00-10:50</option>
      <option value="5">5ª: 10:50-11:40</option>
      <option value="6">6ª: 13:00-13:50</option>
      <option value="7">7ª: 13:50-14:40</option>
      <option value="8">8ª: 15:00-15:50</option>
      <option value="9">9ª: 15:50-16:40</option>
    </select><br><br>

    <label>Semana:</label><br>
    <input type="radio" name="semana" value="segunda"> Segunda<br>
    <input type="radio" name="semana" value="terca"> Terça<br>
    <input type="radio" name="semana" value="quarta"> Quarta<br>
    <input type="radio" name="semana" value="quinta"> Quinta<br>
    <input type="radio" name="semana" value="sexta"> Sexta<br><br>


    <input class="d" type="button" value="Voltar" onclick="location.href='../../PaginaEditarM.php'"><br><br>
    <input class="d" type="submit" value="Cadastrar Aula">
  </form>

</body>

</html>