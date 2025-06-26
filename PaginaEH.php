<?php

$servidor = "localhost";
$usuario = "root";
$senha = "alunoifam";
$banco = "ifam";

$conn = new mysqli($servidor, $usuario, $senha, $banco);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_POST["arroz"]) && isset($_POST["aviso"])) {
    $aula = $_POST["arroz"];
    $aviso = $_POST["aviso"];

    echo "disciplica: ".$_POST["disciplina"];

    $sql = "INSERT INTO aula (semana, Turma_id_turma, Disciplina_id_disciplina) VALUES ('$semana','$curso', '$disciplina')";

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
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Horário - Segunda-feira</title>
  <link rel="stylesheet" href="materias/editados/css/EH.css">
</head>

<body>
  <div class="r">
    <div class="esquerda"><input class="butal" type="button" value="IR PARA TELA DE HORÁRIO" onclick="location.href='horarios/PaginaSegunda.php'">
    </div>
    <div class="direita"><img src="https://cdn-icons-png.flaticon.com/512/4277/4277132.png" alt=""></div>
  </div>
  <form action="">
    <div class="container">
      <div class="header">SEGUNDA</div>
      <table>
        <tr>
          <th></th>
          <th>7:10</th>
          <th>7:50</th>
          <th>8:50</th>
          <th>9:50</th>
          <th>10:50</th>
          <th>11:40</th>
          <th>13:00</th>
          <th>13:50</th>
          <th>14:40</th>
          <th>15:00</th>
          <th>15:50</th>
          <th>16:40</th>
        </tr>
        <!-- ADM 1 -->
        <tr>
          
          <td class="row-title">ADM 1</td>
          <td><select name="arroz" class="input">

          </select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
        </tr>
        <!-- ADM 2 -->
        <tr>
          <td class="row-title">ADM 2</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
        </tr>
        <!-- ADM 3 -->
        <tr>
          <td class="row-title">ADM 3</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
        </tr>
        <!-- AGRO 1 -->
        <tr>
          <td class="row-title">AGRO 1</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
        </tr>
        <!-- AGRO 2 -->
        <tr>
          <td class="row-title">AGRO 2</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
        </tr>
        <!-- AGRO 3 -->
        <tr>
          <td class="row-title">AGRO 3</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
        </tr>
        <!-- INFO 1 -->
        <tr>
          <td class="row-title">INFO 1</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
        </tr>
        <!-- INFO 2 -->
        <tr>
          <td class="row-title">INFO 2</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
        </tr>
        <!-- INFO 3 -->
        <tr>
          <td class="row-title">INFO 3</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
        </tr>
        <!-- MEIO 1 -->
        <tr>
          <td class="row-title">MEIO 1</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
        </tr>
        <!-- MEIO 2 -->
        <tr>
          <td class="row-title">MEIO 2</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
        </tr>
        <!-- MEIO 3 -->
        <tr>
          <td class="row-title">MEIO 3</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
          <td class="break">---</td>
          <td><select name="arroz" class="input"></select></td>
          <td><select name="arroz" class="input"></select></td>
        </tr>
      </table>
      <div class="footer">
        AVISO(S): <select name="aviso" class="input"></select>
      </div>
      <br>

    </div>
    <div class="f">
      <input type="button" class="botao" value="EDITAR BANCO DE DADOS" onclick="location.href='materias/PaginaEditarM.php'">
      <input type="submit" class="botao" value="SALVAR ALTERAÇÕES">
      
    </div>
  </form>
</body>

</html>