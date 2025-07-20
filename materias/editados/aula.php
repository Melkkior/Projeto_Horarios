<?php

$servidor = "localhost";
$usuario = "root";
$senha = "alunoifam";
$banco = "ifam";

$curso = "";

$conn = new mysqli($servidor, $usuario, $senha, $banco);
if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_POST["semana"]) && isset($_POST["curso"]) && isset($_POST["disciplina"])) {

  $semana = $_POST["semana"];
  $curso = $_POST["curso"];
  $disciplina = $_POST["disciplina"];
  $tempo = $_POST["tempo"];

  echo "disciplica: " . $_POST["disciplina"];

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
    $sql = 'select id_turma, id_disciplina ,nome_disciplina, professor_disciplina from Disciplina where id_turma = ' . $_POST["curso"];
    $result = $conn->query($sql);
  } else {
    $sqll = "SELECT id_turma, id_disciplina ,nome_disciplina, professor_disciplina FROM Disciplina";
    $result = $conn->query($sqll);
  }
  $sql2 = "SELECT id_turma, nome_turma, ano FROM turma";
  $result2 = $conn->query($sql2);
}

if (isset($_POST["semana"]) && isset($_POST["curso"]) && isset($_POST["disciplina"])) {

  $cursoU = $_POST["cursoU"];
  $disciplinaU = $_POST["disciplinaU"];
  $tempoU = $_POST["tempoU"];

  $sqlU = "UPDATE aula SET tempo, id_turma, Disciplina_id_disciplina = ('$tempoU','$cursoU', '$disciplinaU')  WHERE ";

  echo $sqlU;

  $resultU = $conn->query($sqlU);
  if ($resultU) {
    echo "<script>alert('aula atualizada com sucesso!');</script>";
    echo "<script>location.href='../../PaginaEditarM.php';</script>";
  } else {
    echo "<script>alert('Erro ao atualizar aula: " . $conn->error . "');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Editar Horários</title>
  <link rel="stylesheet" href="css/estiloAula.css">
  <style>
    body {
      min-height: 100vh;
      margin: 0;
      background: #f2f2f2;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: row;
    }

    nav.menu {
      width: 70px;
      height: 100vh;
      background-color: #dfdfdf;
      padding: 40px 0 40px 1%;
      position: fixed;
      top: 0;
      left: 0;
      overflow: hidden;
      transition: width 0.2s;
      box-shadow: 2px 0 8px #0001;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    nav.menu:hover {
      width: 250px;
    }

    .dtn {
      width: 50%;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      padding-left: 18px;
      margin-bottom: 20px;
    }

    .dtn>i {
      color: #333;
      font-size: 24px;
    }

    .redbull {
      width: 100%;
    }

    ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
      width: 100%;
    }

    ul li.lista {
      transition: background 0.2s;
      width: 100%;
    }

    ul li.lista:hover {
      background: #b0eac8;
    }

    ul li.lista a {
      color: #333;
      text-decoration: none;
      font-size: 18px;
      padding: 16px 8px 16px 18px;
      display: flex;
      align-items: center;
      width: 100%;
    }

    ul li.lista a .icon {
      font-size: 22px;
    }

    ul li.lista a .txt {
      margin-left: 24px;
      font-size: 15px;
      opacity: 0;
      transition: opacity 0.15s, margin-left 0.2s;
      white-space: nowrap;
    }

    nav.menu:hover ul li.lista a .txt {
      opacity: 1;
      margin-left: 16px;
    }

    nav.menu:hover ul li.lista a .icon {
      margin-right: 10px;
    }

    ul li.lista a .txt {
      opacity: 0;
      pointer-events: none;
    }

    nav.menu:hover ul li.lista a .txt {
      opacity: 1;
      pointer-events: auto;
    }



    .container {
      width: 700px;
      margin: 30px auto;
      background-color: #ccc;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    button{
      padding: 10px;
      background-color:  #00a513;
      border-radius: 5px;
      width: 100%;
      color: white;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>



<nav class="menu">
    <div class="dtn">
      <i class="bi bi-list"></i>
    </div>
    <div class="redbull">
      <ul>
        <li class="lista">
          <a href="../../horarios/PaginaHorarios.php">
            <span class="icon"><i class="bi bi-table"></i></span>
            <span class="txt">Tabela de Horários</span>
          </a>
        </li>
        <li class="lista">
          <a href="../../PaginaEditarM.php">
            <span class="icon"><i class="bi bi-pencil-square"></i></span>
            <span class="txt">Editor de Matérias</span>
          </a>
        </li>
        <li class="lista">
          <a href="../../Banco.php">
            <span class="icon"><i class="bi bi-database-fill"></i></span>
            <span class="txt">Banco de Dados</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>





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
      document.getElementById('b').value = "1";
      document.getElementById('a').method = "post";
      document.getElementById('a').action = "aula.php";
      document.getElementById('a').submit();

    }
  </script>

  <div class="container">
    <h2>Gerenciar Horários</h2>

    
      <form method="post" action="#">
        <h3>Adicionar Horário</h3>
        <div class="row">
          <div>
            <label for="turma">Turma:</label>
            <?php
            if ($result2->num_rows > 0) {
              ?>


              <select name="curso" required onchange="buscarTurmapordisciplina();">
                <?php

                while ($row = $result2->fetch_assoc()) {
                  if ($curso == $row['id_turma']) {
                    echo "<option value='" . $row['id_turma'] . "'" . " selected " . ">" . $row['nome_turma'] . " - " . $row['ano'] . "</option>";
                  } else
                    echo "<option value='" . $row['id_turma'] . "'>" . $row['nome_turma'] . " - " . $row['ano'] . "</option>";
                }
                ?>

              </select>
              <?php
            }
            ?>

          </div>
          <div>
            <label>Horário tempo </label>
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

          </div>
          
        </div>
        <div class="kekday">
            <label>Semana:</label><br><br>
            <div class="day">
              <input type="radio" name="semana" value="segunda" class="dayy"> Segunda<br>
              <input type="radio" name="semana" value="terca" class="dayy"> Terça<br>
              <input type="radio" name="semana" value="quarta" class="dayy"> Quarta<br>
              <input type="radio" name="semana" value="quinta" class="dayy"> Quinta<br>
              <input type="radio" name="semana" value="sexta" class="dayy"> Sexta<br><br>
            </div>
        </div>
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
        <button type="submit" name="acao" value="adicionar">Cadastrar</button>
      </form>
      


  </div>
</body>

</html>