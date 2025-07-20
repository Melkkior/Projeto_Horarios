<?php
 if(isset($_POST['materia'])) {
    $materias = $_POST['materia'];
    $ano = $_POST['ano'];

    $servidor = "localhost";
    $usuario = "root";
    $senha = "alunoifam";
    $banco = "ifam";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);
    if($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    $sql = "INSERT INTO turma (nome_turma, ano) VALUES ('$materias', '$ano')";
    $result = $conn->query($sql);
    if($result) {
        echo "<script>alert('Turma cadastrada com sucesso!');</script>";
        echo "<script>location.href='../../PaginaEditarM.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar turma: " . $conn->error . "');</script>";
    }}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Turma</title>
    <link rel="stylesheet" href="css/disciplina.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
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





    :root {
      --primaria: #4169E1; /* azul royal */
      --secundaria: #f0f4f4;
      --texto: #333;
      --fundo: #fff;
      --borda: #ccc;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: var(--secundaria);
      color: var(--texto);
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
    }

    .corpo {
      background-color: var(--fundo);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 450px;
    }

    .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }

    .esquerda .butal {
      background-color: #888;
      border: none;
      padding: 10px 18px;
      border-radius: 8px;
      cursor: pointer;
      color: #fff;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    .esquerda .butal:hover {
      background-color: #666;
    }

    .direita img {
      width: 50px;
      height: 50px;
    }

    form {
      width: 100%;
    }

    h2 {
      color: var(--primaria);
      text-align: center;
      font-weight: 700;
      font-size: 2rem;
      margin-bottom: 25px;
    }

    label {
      display: block;
      margin-bottom: 12px;
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px 12px;
      font-size: 1rem;
      border-radius: 6px;
      border: 1px solid var(--borda);
      margin-top: 6px;
      margin-bottom: 20px;
      transition: border-color 0.3s ease;
    }

    input[type="text"]:focus {
      border-color: var(--primaria);
      outline: none;
    }

    .skibid label {
      font-weight: 500;
      margin-right: 15px;
      cursor: pointer;
      user-select: none;
    }

    .skibid input[type="radio"] {
      margin-right: 6px;
      cursor: pointer;
    }

    .footer {
      display: flex;
      justify-content: space-between;
      gap: 15px;
    }

    .botao {
      flex: 1;
      background-color: var(--primaria);
      border: none;
      color: white;
      padding: 12px 0;
      border-radius: 8px;
      font-weight: 700;
      font-size: 1.1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .botao:hover {
      background-color: #2a4fb8;
    }
  




    </style>
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




    <div class="corpo">
        

        <form action="turma.php" method="POST" id="formulario">
            <h2>Cadastro de Turma</h2>

   <script>
  document.getElementById('formulario').addEventListener('submit', function (e) {
    const checkboxes = document.querySelectorAll('input[name="ano"]');
    const algumMarcado = Array.from(checkboxes).some(checkbox => checkbox.checked);

    if (!algumMarcado) {
      e.preventDefault(); // Impede envio
      alert('Por favor, selecione o ano da turma.');
    }
  });
</script>

            <div id="campos">
                <div class="box">
                    <label>Turma: (apenas a sigla do curso) <input type="text" maxlength="5" name="materia" required ></label>
                    ano:
                    <div class="skibid">
                        <label><input type="radio" name="ano" value="1"> 1º ano</label>
                        <label><input type="radio" name="ano" value="2"> 2º ano</label>
                        <label><input type="radio" name="ano" value="3"> 3º ano</label>
                    </div>
                </div>
            </div>
            <div class="footer">
                <input type="button" class="botao" value="Cancelar" onclick="location.href='../../PaginaEditarM.php'">
                <input type="submit" class="botao" value="Salvar">
            </div>
        </form>
    </div>
</body>

</html>