<?php
$servidor = "localhost";
$usuario = "root";
$senha = "alunoifam";
$banco = "ifam";



$day = date('l');

switch ($day) {
  case "Monday":

    $dayn = 2;
    break;
  case "Tuesday":

    $dayn = 3;
    break;
  case "Wednesday":

    $dayn = 4;
    break;
  case "Thursday":

    $dayn = 5;
    break;
  case "Friday":

    $dayn = 6;
    break;
  default:
    $dayn = 0;
    break;
}

$conn = new mysqli($servidor, $usuario, $senha, $banco);
if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

$sqll = " select b.nome_turma, a.tempo, a.dia, c.nome_disciplina, c.professor_disciplina " .
  " from aula a, turma b, disciplina c" .
  " where a.id_turma = b.id_turma" .
  " and   a.Disciplina_id_disciplina = c.id_disciplina" .
  " and   a.dia = '" . $dayn . "'" .
  " ORDER by tempo";
$result = $conn->query($sqll);

$sql3 = "SELECT descricao FROM aviso";
$result3 = $conn->query($sql3);

//15/05/2025 ultimo dia da primeira parte

$cursos = array();
for ($i = 0; $i < 12; $i++) {
  $id = $i + 1;

  $turmas = "SELECT nome_turma, ano FROM turma WHERE id_turma = $id";
  $resultado = $conn->query($turmas);

  if ($resultado && $resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    $cursos[$i] = $row['ano'] . "ª " . $row['nome_turma'];
  } else {
    $cursos[$i] = " ";
  }
}
$tempo1 = array();

for ($i = 0; $i < 12; $i++) {
    $id = $i + 1;
    
    $sql = "SELECT a.id_turma, a.dia, a.tempo, 
                   d.nome_disciplina, d.professor_disciplina 
            FROM aula a
            JOIN disciplina d ON a.Disciplina_id_disciplina = d.id_disciplina
            WHERE a.id_turma = $id";
    
    $resultado = $conn->query($sql);

    $tempo1[$i] = ""; // Inicializa vazio

    if ($resultado && $resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
          $tem = $row['tempo']
          if ($tem == 1){
              $dias = $row['dia'];
          switch($dias){
            case "segunda":
            $tempo1[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "terca":
            $tempo1[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "quarta":
            $tempo1[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "quinta":
            $tempo1[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "sexta":
            $tempo1[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
            default:
             $tempo1[$i] = "Nenhuma aula na segunda";
            break;
          }
          }
          
            
        }
        
            
        
    }
}
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
      switch ($day) {
        case "Monday":
          echo "SEGUNDA";
          break;
        case "Tuesday":
          echo "TERÇA";
          break;
        case "Wednesday":
          echo "QUARTA";
          break;
        case "Thursday":
          echo "QUINTA";
          break;
        case "Friday":
          echo "SEXTA";
          break;
        default:
          echo "FIM DE SEMANA";
          break;
      }
      ;
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
        <td class="row-title">
          <?php
          echo $cursos[0];
          ?>
        </td>
        <td><?php
          echo $tempo1[0];
          ?></td>
        <td></td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
        <td class="row-title">
          <?php
          echo $cursos[1];
          ?>
        </td>
        <td><?php
          echo $tempo1[1];
          ?></td></td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
        <td class="row-title">
          <?php
          echo $cursos[2];
          ?>
        </td>
        <td> <?php
          echo $tempo1[2];
          ?></td></td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
        <td class="row-title">
          <?php
          echo $cursos[3];
          ?>
        </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
        <td class="row-title">
          <?php
          echo $cursos[4];
          ?>
        </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
        <td class="row-title">
          <?php
          echo $cursos[5];
          ?>
        </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
        <td class="row-title">
          <?php
          echo $cursos[6];
          ?>
        </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
        <td class="row-title">
          <?php
          echo $cursos[7];
          ?>
        </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
        <td class="row-title">
          <?php
          echo $cursos[8];
          ?>
        </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
        <td class="row-title"><?php
        echo $cursos[9];
        ?></td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
        <td class="row-title">
          <?php
          echo $cursos[10];
          ?>
        </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
        <td class="row-title">
          <?php
          echo $cursos[11];
          ?>
        </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
        <td class="break">---</td>
        <td> </td>
        <td> </td>
      </tr>
    </table>
    <div class="footer">
      <h5>AVISO:<?php
      while ($row = mysqli_fetch_assoc($result3)) {
        echo "<p>" . $row['descricao'] . "</p>";
      }
      ?></h5>
    </div>
  </div>
</body>

</html>