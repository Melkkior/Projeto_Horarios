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

$sql = "SELECT a.id_turma, a.dia, a.tempo, 
                   d.nome_disciplina, d.professor_disciplina 
            FROM aula a
            JOIN disciplina d ON a.Disciplina_id_disciplina = d.id_disciplina
            WHERE a.id_turma = $id";
    
    $resultado = $conn->query($sql);
    
$tempo1 = array();

for ($i = 0; $i < 12; $i++) {
    $id = $i + 1;
    
    

    $tempo1[$i] = "";

    if ($resultado && $resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
          $tem = $row['tempo'];
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
             $tempo1[$i] = "N";
            break;
          }
          }
          
            
        }
        
            
        
    }
    
}
$tempo2 = array();

for ($i = 0; $i < 12; $i++) {
    $id = $i + 1;
    
    

    $tempo2[$i] = "";

    if ($resultado && $resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
          $tem = $row['tempo'];
          if ($tem == 2){
              $dias = $row['dia'];
          switch($dias){
            case "segunda":
            $tempo2[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "terca":
            $tempo2[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "quarta":
            $tempo2[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "quinta":
            $tempo2[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "sexta":
            $tempo2[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
            default:
             $tempo2[$i] = "N";
            break;
          }
          }
          
            
        }
        
            
        
    }
    
}
$tempo3 = array();

for ($i = 0; $i < 12; $i++) {
    $id = $i + 1;
    
    

    $tempo3[$i] = "";

    if ($resultado && $resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
          $tem = $row['tempo'];
          if ($tem == 3){
              $dias = $row['dia'];
          switch($dias){
            case "segunda":
            $tempo3[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "terca":
            $tempo3[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "quarta":
            $tempo3[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "quinta":
            $tempo3[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "sexta":
            $tempo3[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
            default:
             $tempo3[$i] = "N";
            break;
          }
          }
          
            
        }
        
            
        
    }
    
}
$tempo4 = array();

for ($i = 0; $i < 12; $i++) {
    $id = $i + 1;
    
    

    $tempo4[$i] = "";

    if ($resultado && $resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
          $tem = $row['tempo'];
          if ($tem == 4){
              $dias = $row['dia'];
          switch($dias){
            case "segunda":
            $tempo4[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "terca":
            $tempo4[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "quarta":
            $tempo4[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "quinta":
            $tempo4[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "sexta":
            $tempo4[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
            default:
             $tempo4[$i] = "N";
            break;
          }
          }
          
            
        }
        
            
        
    }
    
}
$tempo5 = array();

for ($i = 0; $i < 12; $i++) {
    $id = $i + 1;
    
    

    $tempo5[$i] = "";

    if ($resultado && $resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
          $tem = $row['tempo'];
          if ($tem == 5){
              $dias = $row['dia'];
          switch($dias){
            case "segunda":
            $tempo5[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "terca":
            $tempo5[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "quarta":
            $tempo5[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "quinta":
            $tempo5[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "sexta":
            $tempo5[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
            default:
             $tempo2[$i] = "N";
            break;
          }
          }
          
            
        }
        
            
        
    }
    
}
$tempo6 = array();

for ($i = 0; $i < 12; $i++) {
    $id = $i + 1;
    
    

    $tempo6[$i] = "";

    if ($resultado && $resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
          $tem = $row['tempo'];
          if ($tem == 6){
              $dias = $row['dia'];
          switch($dias){
            case "segunda":
            $tempo6[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "terca":
            $tempo6[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "quarta":
            $tempo6[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "quinta":
            $tempo6[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "sexta":
            $tempo6[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
            default:
             $tempo6[$i] = "N";
            break;
          }
          }
          
            
        }
        
            
        
    }
    
}
$tempo7 = array();

for ($i = 0; $i < 12; $i++) {
    $id = $i + 1;
    
    

    $tempo7[$i] = "";

    if ($resultado && $resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
          $tem = $row['tempo'];
          if ($tem == 7){
              $dias = $row['dia'];
          switch($dias){
            case "segunda":
            $tempo7[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "terca":
            $tempo7[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "quarta":
            $tempo7[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "quinta":
            $tempo7[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "sexta":
            $tempo7[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
            default:
             $tempo7[$i] = "N";
            break;
          }
          }
          
            
        }
        
            
        
    }
    
}
$tempo8 = array();

for ($i = 0; $i < 12; $i++) {
    $id = $i + 1;
    
    

    $tempo8[$i] = "";

    if ($resultado && $resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
          $tem = $row['tempo'];
          if ($tem == 8){
              $dias = $row['dia'];
          switch($dias){
            case "segunda":
            $tempo8[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "terca":
            $tempo8[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "quarta":
            $tempo8[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "quinta":
            $tempo8[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "sexta":
            $tempo8[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
            default:
             $tempo8[$i] = "N";
            break;
          }
          }
          
            
        }
        
            
        
    }
    
}
$tempo9 = array();

for ($i = 0; $i < 12; $i++) {
    $id = $i + 1;
    
    

    $tempo9[$i] = "";

    if ($resultado && $resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
          $tem = $row['tempo'];
          if ($tem == 9){
              $dias = $row['dia'];
          switch($dias){
            case "segunda":
            $tempo9[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "terca":
            $tempo9[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "quarta":
            $tempo9[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "quinta":
            $tempo9[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
          case "sexta":
            $tempo9[$i] .= $row['nome_disciplina'] . " (" . $row['professor_disciplina'] . ")";
          break;
            default:
             $tempo9[$i] = "N";
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
      
      <tr>
        <td class="row-title"><?php echo $cursos[0];?></td>
        <td><?php echo $tempo1[0];?></td>
        <td><?php echo $tempo2[0];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo3[0];?></td>
        <td><?php echo $tempo4[0];?></td>
        <td><?php echo $tempo5[0];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo6[0];?></td>
        <td><?php echo $tempo7[0];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo8[0];?></td>
        <td><?php echo $tempo9[0];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php echo $cursos[1];?></td>
        <td><?php echo $tempo1[1];?></td>
        <td><?php echo $tempo2[1];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo3[1];?></td>
        <td><?php echo $tempo4[1];?></td>
        <td><?php echo $tempo5[1];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo6[1];?></td>
        <td><?php echo $tempo7[1];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo8[1];?></td>
        <td><?php echo $tempo9[1];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php echo $cursos[2];?></td>
        <td><?php echo $tempo1[2];?></td>
        <td><?php echo $tempo2[2];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo3[2];?></td>
        <td><?php echo $tempo4[2];?></td>
        <td><?php echo $tempo5[2];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo6[2];?></td>
        <td><?php echo $tempo7[2];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo8[2];?></td>
        <td><?php echo $tempo9[2];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php echo $cursos[3];?></td>
        <td><?php echo $tempo1[3];?></td>
        <td><?php echo $tempo2[3];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo3[3];?></td>
        <td><?php echo $tempo4[3];?></td>
        <td><?php echo $tempo5[3];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo6[3];?></td>
        <td><?php echo $tempo7[3];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo8[3];?></td>
        <td><?php echo $tempo9[3];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php echo $cursos[4];?></td>
        <td><?php echo $tempo1[4];?></td>
        <td><?php echo $tempo2[4];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo3[4];?></td>
        <td><?php echo $tempo4[4];?></td>
        <td><?php echo $tempo5[4];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo6[4];?></td>
        <td><?php echo $tempo7[4];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo8[4];?></td>
        <td><?php echo $tempo9[4];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php echo $cursos[5];?></td>
        <td><?php echo $tempo1[5];?></td>
        <td><?php echo $tempo2[5];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo3[5];?></td>
        <td><?php echo $tempo4[5];?></td>
        <td><?php echo $tempo5[5];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo6[5];?></td>
        <td><?php echo $tempo7[5];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo8[5];?></td>
        <td><?php echo $tempo9[5];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php echo $cursos[6];?></td>
        <td><?php echo $tempo1[6];?></td>
        <td><?php echo $tempo2[6];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo3[6];?></td>
        <td><?php echo $tempo4[6];?></td>
        <td><?php echo $tempo5[6];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo6[6];?></td>
        <td><?php echo $tempo7[6];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo8[6];?></td>
        <td><?php echo $tempo9[6];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php echo $cursos[7];?></td>
        <td><?php echo $tempo1[7];?></td>
        <td><?php echo $tempo2[7];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo3[7];?></td>
        <td><?php echo $tempo4[7];?></td>
        <td><?php echo $tempo5[7];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo6[7];?></td>
        <td><?php echo $tempo7[7];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo8[7];?></td>
        <td><?php echo $tempo9[7];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php echo $cursos[8];?></td>
        <td><?php echo $tempo1[8];?></td>
        <td><?php echo $tempo2[8];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo3[8];?></td>
        <td><?php echo $tempo4[8];?></td>
        <td><?php echo $tempo5[8];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo6[8];?></td>
        <td><?php echo $tempo7[8];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo8[8];?></td>
        <td><?php echo $tempo9[8];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php echo $cursos[9];?></td>
        <td><?php echo $tempo1[9];?></td>
        <td><?php echo $tempo2[9];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo3[9];?></td>
        <td><?php echo $tempo4[9];?></td>
        <td><?php echo $tempo5[9];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo6[9];?></td>
        <td><?php echo $tempo7[9];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo8[9];?></td>
        <td><?php echo $tempo9[9];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php echo $cursos[10];?></td>
        <td><?php echo $tempo1[10];?></td>
        <td><?php echo $tempo2[10];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo3[10];?></td>
        <td><?php echo $tempo4[10];?></td>
        <td><?php echo $tempo5[10];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo6[10];?></td>
        <td><?php echo $tempo7[10];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo8[10];?></td>
        <td><?php echo $tempo9[10];?></td>
      </tr>
      <tr>
        <td class="row-title"><?php echo $cursos[11];?></td>
        <td><?php echo $tempo1[11];?></td>
        <td><?php echo $tempo2[11];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo3[11];?></td>
        <td><?php echo $tempo4[11];?></td>
        <td><?php echo $tempo5[11];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo6[11];?></td>
        <td><?php echo $tempo7[11];?></td>
        <td class="break">---</td>
        <td><?php echo $tempo8[11];?></td>
        <td><?php echo $tempo9[11];?></td>
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