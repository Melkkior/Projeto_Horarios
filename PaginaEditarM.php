<?php
$servidor = "localhost";
$usuario = "root";
$senha = "alunoifam";
$banco = "ifam";

$conn = new mysqli($servidor, $usuario, $senha, $banco);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aviso = trim($_POST["avisoo"] ?? '');

    if ($aviso === '') {
        echo "<script>alert('Preencha o campo de aviso antes de enviar!');</script>";
        exit;
    }

    // Verifica se já existe algum aviso
    $sql_check = "SELECT id_aviso FROM Aviso LIMIT 1";
    $result = $conn->query($sql_check);

    if ($result && $result->num_rows > 0) {
        // Já existe um aviso, faz UPDATE
        $row = $result->fetch_assoc();
        $id_aviso = $row['id_aviso'];
        $sql_update = "UPDATE Aviso SET descricao = ? WHERE id_aviso = ?";
        $stmt = $conn->prepare($sql_update);
        $stmt->bind_param("si", $aviso, $id_aviso);
        $stmt->execute();
        $stmt->close();
        echo "<script>alert('Aviso atualizado com sucesso!');</script>";
    } else {
        // Não existe aviso, faz INSERT
        $sql_insert = "INSERT INTO Aviso (descricao) VALUES (?)";
        $stmt = $conn->prepare($sql_insert);
        $stmt->bind_param("s", $aviso);
        $stmt->execute();
        $stmt->close();
        echo "<script>alert('Aviso cadastrado com sucesso!');</script>";
    }
    echo "<script>location.href='PaginaEditarM.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Cadastro de Matérias</title>
  <link rel="stylesheet" href="materias/editados/css/PaginaEMM.css">
</head>

<body>
  <div class="container">
    <div class="esquerda"><input class="voltar" type="button" value="VOLTAR"
        onclick="location.href='horarios/PaginaHorarios.php'"></div>
    <div class="direita"><img src="https://cdn-icons-png.flaticon.com/512/20/20093.png" alt=""></div>
  </div>
  <form action="" method="POST" id="formulario">
    <br>
    <div class="carterpie">
      <div class="editado">
        <h3>CADASTRAR TURMAS:</h3>
        <input type="button" class="inputtt" value="CADASTRAR" onclick="location.href='materias/editados/turma.php'">
      </div>
      <div class="editado">
        <h3>CADASTRAR DISCIPLINA:</h3>
        <input type="button" class="inputtt" value="CADASTRAR"
          onclick="location.href='materias/editados/disciplina.php'">
      </div>
      <div class="editado">
        <h3>CADASTRAR AULAS:</h3>
        <input type="button" class="inputtt" value="CADASTRAR" onclick="location.href='materias/editados/aula.php'">
      </div>
      <div class="aviso">
        <h3>AVISO:</h3>
        <input type="text" class="avisado" name="avisoo">
        <input type="submit" class="inputtt2" value="CADASTRAR" onclick="location.href='editados/aula.php'">
      </div>
    </div>
  </form>
</body>

</html>