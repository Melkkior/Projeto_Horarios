<?php
$servidor = "localhost";
$usuario = "root";
$senha = "alunoifam";
$banco = "ifam";

$conn = new mysqli($servidor, $usuario, $senha, $banco);
if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}
$sqll = "SELECT id_turma, id_disciplina ,nome_disciplina, professor_disciplina FROM Disciplina";
$result = $conn->query($sqll);
$sql2 = "SELECT id_turma, nome_turma, ano FROM turma";
$result2 = $conn->query($sql2);
$sql3 = "SELECT descricao FROM aviso";
$result3 = $conn->query($sql3);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Horários</title>
  <link rel="stylesheet" href="css/PaginaHes.css">
</head>

<body>
  <div class="container">
    <div class="header">
      <?php
      $day = date('l');

      switch ($day) {
        case "Monday":
          $day = "SEGUNDA";
          break;
        case "Tuesday":
          $day = "TERÇA";
          break;
        case "Wednesday":
          $day = "QUARTA";
          break;
        case "Thursday":
          $day = "QUINTA";
          break;
        case "Friday":
          $day = "SEXTA";
          break;
        default:
          $day = "Dia Desconhecido";
          break;
      }

      echo $day;
      ?>
    </div>
    <table>
      <tr>
        <th></th>
        <th>7:10-8:00</th>
        <th>8:00-8:50</th>
        <th>8:50-9:10</th>
        <th>9:10-10:00</th>
        <th>10:00-10:50</th>
        <th>10:50-11:40</th>
        <th>11:40-13:00</th>
        <th>13:00-13:50</th>
        <th>13:50-14:40</th>
        <th>14:40-15:00</th>
        <th>15:00-15:50</th>
        <th>15:50-16:40</th>
      </tr>
      <!-- ADM 1 -->
      <tr>
        <td class="row-title">ADM 1</td>
        <td><?php
        $day = date('l');
        switch ($day) {
          case "Monday":
            
            break;
          case "Tuesday":
            echo "PORTUGUES (MARINES) ";
            break;
          case "Wednesday":
            echo "PORTUGUES (MARINES) ";
            break;
          case "Thursday":
            echo "PORTUGUES (MARINES) ";
            break;
          case "Friday":
            echo "PORTUGUES (MARINES) ";
            break;
          default:
            echo "Dia Desconhecido";
            break;
        }
        ?></td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
      </tr>
      <!-- ADM 2 -->
      <tr>
        <td class="row-title">ADM 2</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
      </tr>
      <!-- ADM 3 -->
      <tr>
        <td class="row-title">ADM 3</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
      </tr>
      <!-- AGRO 1 -->
      <tr>
        <td class="row-title">AGRO 1</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
      </tr>
      <!-- AGRO 2 -->
      <tr>
        <td class="row-title">AGRO 2</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
      </tr>
      <!-- AGRO 3 -->
      <tr>
        <td class="row-title">AGRO 3</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
      </tr>
      <!-- INFO 1 -->
      <tr>
        <td class="row-title">INFO 1</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
      </tr>
      <!-- INFO 2 -->
      <tr>
        <td class="row-title">INFO 2</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
      </tr>
      <!-- INFO 3 -->
      <tr>
        <td class="row-title">INFO 3</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
      </tr>
      <!-- MEIO 1 -->
      <tr>
        <td class="row-title">MEIO 1</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
      </tr>
      <!-- MEIO 2 -->
      <tr>
        <td class="row-title">MEIO 2</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
      </tr>
      <!-- MEIO 3 -->
      <tr>
        <td class="row-title">MEIO 3</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
        <td class="break">---</td>
        <td>PORTUGUES (MARINES) </td>
        <td>PORTUGUES (MARINES) </td>
      </tr>
    </table>
    <div class="footer">
      <h5>AVISO: </h5>
      <?php
      while ($row = mysqli_fetch_assoc($result3)) {
        echo "<p>" . $row['descricao'] . "</p>";
      }
      ?>
    </div>
  </div>
</body>

</html>