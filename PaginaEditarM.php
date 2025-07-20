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
      width: 60px;
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




    .recebaaa {
      width: 91%;
      height: 93vh;
      
      margin-left: auto;
      padding: 16px;
      display: flex;
      flex-direction: column;
      gap: 16px;
      
    }
    .rebeee{
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      width: 100%;
      gap: 16px;
    }
    .caixa{
      height: 200px;
      width: 98%;
      background-color:rgb(220, 220, 220);
      border-radius: 8px;
      display: flex;
      padding: 16px;
      flex-direction: column;
      align-items: center;
    }
    .caixa1{
      height: 350px;
      width: 97%;
      background-color:rgb(220, 220, 220);
      border-radius: 8px;
      display: flex;
      padding: 16px;
      flex-direction: column;
      align-items: center;
    }
    .botao{
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 10px;
    }
    .avisor{
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
    }
    .avisado{
      width: 1000px;
      height: 150px;
      padding: 10px;
      border-radius: 5px;
      background-color: white;
      align-items: top;
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
          <a href="horarios/PaginaHorarios.php">
            <span class="icon"><i class="bi bi-table"></i></span>
            <span class="txt">Tabela de Horários</span>
          </a>
        </li>
        <li class="lista">
          <a href="PaginaEditarM.php">
            <span class="icon"><i class="bi bi-pencil-square"></i></span>
            <span class="txt">Editor de Matérias</span>
          </a>
        </li>
        <li class="lista">
          <a href="Banco.php">
            <span class="icon"><i class="bi bi-database-fill"></i></span>
            <span class="txt">Banco de Dados</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>





  <div class="recebaaa">
    <div class="rebeee">
      <div class="caixa">
      <div><H2>CADASTRAR</H2></div>
      <div>
        <button class="botao" onclick="location.href='materias/editados/turma.php'">CURSO</button>
        <button class="botao" onclick="location.href='materias/editados/disciplina.php'">DISCIPLINA</button>
        <button class="botao" onclick="location.href='materias/editados/aula.php'">AULA</button>
      </div>
    </div>
    <div class="caixa">
      <div><H2>ALTERAR (em construção)</H2></div>
      <div>
        <button class="botao">CURSO</button>
        <button class="botao">DISCIPLINA</button>
        <button class="botao">AULA</button>
      </div>
    </div>
    </div>
    <div class="caixa1">
      <div><H2>AVISO</H2></div>
      <div class="avisor">
        <input type="text" class="avisado" name="avisoo">
        <input type="submit" class="botao" value="CADASTRAR" onclick="location.href='PaginaEditarM.php'">
      </div>
    </div>
  </div>


  <!-- <form action="" method="POST" id="formulario">
    <br>
    <div class="carterpie">
      <div class="editado">
        <h3>CADASTRAR TURMAS:</h3>
        <input type="button" class="inputtt" value="CADASTRAR" >
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
  </form> -->
</body>

</html>