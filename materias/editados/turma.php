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
        echo "<script>location.href='../PaginaEditarM.php';</script>";
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
</head>

<body>
    <div class="corpo">
        <div class="container">
            <div class="esquerda"><input class="butal" type="button" value="VOLTAR" onclick="location.href='../PaginaEditarM.php'"></div>
            <div class="direita"><img src="https://cdn-icons-png.flaticon.com/512/20/20093.png" alt=""></div>
        </div>

        <form action="turma.php" method="POST" id="formulario">
            <h2>Cadastro de Turma</h2>
            <div id="campos">
                <div class="box">
                    <label>Turma: (apenas a sigla do curso) <input type="text" maxlength="5" name="materia"></label>
                    ano:
                    <div class="skibid">
                        <label><input type="radio" name="ano" value="1"> 1º ano</label>
                        <label><input type="radio" name="ano" value="2"> 2º ano</label>
                        <label><input type="radio" name="ano" value="3"> 3º ano</label>
                    </div>
                </div>
            </div>
            <div class="footer">
                <input type="button" class="botao" value="Cancelar" onclick="location.href='../PaginaEH.php'">
                <input type="submit" class="botao" value="Salvar">
            </div>
        </form>
    </div>
</body>

</html>