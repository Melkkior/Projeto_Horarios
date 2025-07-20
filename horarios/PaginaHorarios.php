<?php
$servidor = "localhost";
$usuario = "root";
$senha = "alunoifam";
$banco = "ifam";



$day = date('l');
$dayn;
switch ($day) {
  case "Monday":

    $dayn = "segunda";
    break;
  case "Tuesday":

    $dayn = "terca";
    break;
  case "Wednesday":

    $dayn = "quarta";
    break;
  case "Thursday":

    $dayn = "quinta";
    break;
  case "Friday":

    $dayn = "sexta";
    break;
  default:
    $dayn = "";
    break;
  
}

$conn = new mysqli($servidor, $usuario, $senha, $banco);
if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

$sqll = " select b.ano, b.nome_turma, a.tempo, a.dia, c.nome_disciplina, c.professor_disciplina " .
  " from aula a, turma b, disciplina c" .
  " where a.id_turma = b.id_turma" .
  " and   a.Disciplina_id_disciplina = c.id_disciplina" .
  " and   a.dia = '" . $dayn . "'" .
  " ORDER by tempo";

$result = $conn->query($sqll);

$sql3 = "SELECT descricao FROM aviso";
$result3 = $conn->query($sql3);

//15/05/2025 ultimo dia da primeira parte
$curso = array();
$tempo1 = array();
$tempo2 = array();
$tempo3 = array();
$tempo4 = array();
$tempo5 = array();
$tempo6 = array();
$tempo7 = array();
$tempo8 = array();
$tempo9 = array();

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
      array_push($curso,$row['ano'].'° '.$row['nome_turma']);
          if ($row['tempo']==1) array_push($tempo1,$row['nome_disciplina'].'<br>'.$row['professor_disciplina']);
      if ($row['tempo']==2) array_push($tempo2,$row['nome_disciplina'].'<br>'.$row['professor_disciplina']);
      if ($row['tempo']==3) array_push($tempo3,$row['nome_disciplina'].'<br>'.$row['professor_disciplina']);
      if ($row['tempo']==4) array_push($tempo4,$row['nome_disciplina'].'<br>'.$row['professor_disciplina']);
      if ($row['tempo']==5) array_push($tempo5,$row['nome_disciplina'].'<br>'.$row['professor_disciplina']);
      if ($row['tempo']==6) array_push($tempo6,$row['nome_disciplina'].'<br>'.$row['professor_disciplina']);
      if ($row['tempo']==7) array_push($tempo7,$row['nome_disciplina'].'<br>'.$row['professor_disciplina']);
      if ($row['tempo']==8) array_push($tempo8,$row['nome_disciplina'].'<br>'.$row['professor_disciplina']);
      if ($row['tempo']==9) array_push($tempo9,$row['nome_disciplina'].'<br>'.$row['professor_disciplina']);
        
        
      
  
} }





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
      
      <tr>
        <td class="row-title"><?php if (isset($curso[0])) echo $curso[0];?></td>
        <td><?php if (isset($tempo1[0])) echo $tempo1[0];?></td>
        <td><?php if (isset($tempo2[0])) echo $tempo2[0];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo3[0])) echo $tempo3[0];?></td>
        <td><?php if (isset($tempo4[0])) echo $tempo4[0];?></td>
        <td><?php if (isset($tempo5[0])) echo $tempo5[0];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo6[0])) echo $tempo6[0];?></td>
        <td><?php if (isset($tempo7[0])) echo $tempo7[0];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo8[0])) echo $tempo8[0];?></td>
        <td><?php if (isset($tempo9[0])) echo $tempo9[0];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php if (isset($curso[1])) echo $curso[1];?></td>
        <td><?php if (isset($tempo1[1])) echo $tempo1[1];?></td>
        <td><?php if (isset($tempo2[1])) echo $tempo2[1];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo3[1])) echo $tempo3[1];?></td>
        <td><?php if (isset($tempo4[1])) echo $tempo4[1];?></td>
        <td><?php if (isset($tempo5[1])) echo $tempo5[1];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo6[1])) echo $tempo6[1];?></td>
        <td><?php if (isset($tempo7[1])) echo $tempo7[1];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo8[1])) echo $tempo8[1];?></td>
        <td><?php if (isset($tempo9[1])) echo $tempo9[1];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php if (isset($curso[2])) echo $curso[2];?></td>
        <td><?php if (isset($tempo1[2])) echo $tempo1[2];?></td>
        <td><?php if (isset($tempo2[2])) echo $tempo2[2];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo3[2])) echo $tempo3[2];?></td>
        <td><?php if (isset($tempo4[2])) echo $tempo4[2];?></td>
        <td><?php if (isset($tempo5[2])) echo $tempo5[2];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo6[2])) echo $tempo6[2];?></td>
        <td><?php if (isset($tempo7[2])) echo $tempo7[2];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo8[2])) echo $tempo8[2];?></td>
        <td><?php if (isset($tempo9[2])) echo $tempo9[2];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php if (isset($curso[3])) echo $curso[3];?></td>
        <td><?php if (isset($tempo1[3])) echo $tempo1[3];?></td>
        <td><?php if (isset($tempo2[3])) echo $tempo2[3];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo3[3])) echo $tempo3[3];?></td>
        <td><?php if (isset($tempo4[3])) echo $tempo4[3];?></td>
        <td><?php if (isset($tempo5[3])) echo $tempo5[3];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo6[3])) echo $tempo6[3];?></td>
        <td><?php if (isset($tempo7[3])) echo $tempo7[3];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo8[3])) echo $tempo8[3];?></td>
        <td><?php if (isset($tempo9[3])) echo $tempo9[3];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php if (isset($curso[4])) echo $curso[4];?></td>
        <td><?php if (isset($tempo1[4])) echo $tempo1[4];?></td>
        <td><?php if (isset($tempo2[4])) echo $tempo2[4];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo3[4])) echo $tempo3[4];?></td>
        <td><?php if (isset($tempo4[4])) echo $tempo4[4];?></td>
        <td><?php if (isset($tempo5[4])) echo $tempo5[4];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo6[4])) echo $tempo6[4];?></td>
        <td><?php if (isset($tempo7[4])) echo $tempo7[4];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo8[4])) echo $tempo8[4];?></td>
        <td><?php if (isset($tempo9[4])) echo $tempo9[4];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php if (isset($curso[5])) echo $curso[5];?></td>
        <td><?php if (isset($tempo1[5])) echo $tempo1[5];?></td>
        <td><?php if (isset($tempo2[5])) echo $tempo2[5];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo3[5])) echo $tempo3[5];?></td>
        <td><?php if (isset($tempo4[5])) echo $tempo4[5];?></td>
        <td><?php if (isset($tempo5[5])) echo $tempo5[5];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo6[5])) echo $tempo6[5];?></td>
        <td><?php if (isset($tempo7[5])) echo $tempo7[5];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo8[5])) echo $tempo8[5];?></td>
        <td><?php if (isset($tempo9[5])) echo $tempo9[5];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php if (isset($curso[6])) echo $curso[6];?></td>
        <td><?php if (isset($tempo1[6])) echo $tempo1[6];?></td>
        <td><?php if (isset($tempo2[6])) echo $tempo2[6];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo3[6])) echo $tempo3[6];?></td>
        <td><?php if (isset($tempo4[6])) echo $tempo4[6];?></td>
        <td><?php if (isset($tempo5[6])) echo $tempo5[6];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo6[6])) echo $tempo6[6];?></td>
        <td><?php if (isset($tempo7[6])) echo $tempo7[6];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo8[6])) echo $tempo8[6];?></td>
        <td><?php if (isset($tempo9[6])) echo $tempo9[6];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php if (isset($curso[7])) echo $curso[7];?></td>
        <td><?php if (isset($tempo1[7])) echo $tempo1[7];?></td>
        <td><?php if (isset($tempo2[7])) echo $tempo2[7];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo3[7])) echo $tempo3[7];?></td>
        <td><?php if (isset($tempo4[7])) echo $tempo4[7];?></td>
        <td><?php if (isset($tempo5[7])) echo $tempo5[7];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo6[7])) echo $tempo6[7];?></td>
        <td><?php if (isset($tempo7[7])) echo $tempo7[7];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo8[7])) echo $tempo8[7];?></td>
        <td><?php if (isset($tempo9[7])) echo $tempo9[7];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php if (isset($curso[8])) echo $curso[8];?></td>
        <td><?php if (isset($tempo1[8])) echo $tempo1[8];?></td>
        <td><?php if (isset($tempo2[8])) echo $tempo2[8];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo3[8])) echo $tempo3[8];?></td>
        <td><?php if (isset($tempo4[8])) echo $tempo4[8];?></td>
        <td><?php if (isset($tempo5[8])) echo $tempo5[8];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo6[8])) echo $tempo6[8];?></td>
        <td><?php if (isset($tempo7[8])) echo $tempo7[8];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo8[8])) echo $tempo8[8];?></td>
        <td><?php if (isset($tempo9[8])) echo $tempo9[8];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php if (isset($curso[9])) echo $curso[9];?></td>
        <td><?php if (isset($tempo1[9])) echo $tempo1[9];?></td>
        <td><?php if (isset($tempo2[9])) echo $tempo2[9];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo3[9])) echo $tempo3[9];?></td>
        <td><?php if (isset($tempo4[9])) echo $tempo4[9];?></td>
        <td><?php if (isset($tempo5[9])) echo $tempo5[9];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo6[9])) echo $tempo6[9];?></td>
        <td><?php if (isset($tempo7[9])) echo $tempo7[9];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo8[9])) echo $tempo8[9];?></td>
        <td><?php if (isset($tempo9[9])) echo $tempo9[9];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php if (isset($curso[10])) echo $curso[10];?></td>
        <td><?php if (isset($tempo1[10])) echo $tempo1[10];?></td>
        <td><?php if (isset($tempo2[10])) echo $tempo2[10];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo3[10])) echo $tempo3[10];?></td>
        <td><?php if (isset($tempo4[10])) echo $tempo4[10];?></td>
        <td><?php if (isset($tempo5[10])) echo $tempo5[10];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo6[10])) echo $tempo6[10];?></td>
        <td><?php if (isset($tempo7[10])) echo $tempo7[10];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo8[10])) echo $tempo8[10];?></td>
        <td><?php if (isset($tempo9[10])) echo $tempo9[10];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php if (isset($curso[11])) echo $curso[11];?></td>
        <td><?php if (isset($tempo1[11])) echo $tempo1[11];?></td>
        <td><?php if (isset($tempo2[11])) echo $tempo2[11];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo3[11])) echo $tempo3[11];?></td>
        <td><?php if (isset($tempo4[11])) echo $tempo4[11];?></td>
        <td><?php if (isset($tempo5[11])) echo $tempo5[11];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo6[11])) echo $tempo6[11];?></td>
        <td><?php if (isset($tempo7[11])) echo $tempo7[11];?></td>
        <td class="break">---</td>
        <td><?php if (isset($tempo8[11])) echo $tempo8[11];?></td>
        <td><?php if (isset($tempo9[11])) echo $tempo9[11];?></td>
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