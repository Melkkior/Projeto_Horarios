<?php

$servidor = "localhost";
$usuario = "root";
$senha = "alunoifam";
$banco = "ifam";

$conn = new mysqli($servidor, $usuario, $senha, $banco);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_POST["materia"]) && $_POST["professor"]) {
    $materias = $_POST["materia"];
    $professores = $_POST["professor"];

    $sql = "INSERT INTO Disciplina (nome_disciplina, professor_disciplina) VALUES ('$materias', '$professores')";
    $result = $conn->query($sql);
    if ($result) {
        echo "<script>alert('Disciplina cadastrada com sucesso!');</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar disciplina: " . $conn->error . "');</script>";
    }
} else {
    $sql = "SELECT id_turma, nome_turma, ano FROM turma";
    $result = $conn->query($sql);

}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Disciplinas</title>
    <link rel="stylesheet" href="css/disciplina.css">
</head>

<body>
    <div class="corpo">
        <div class="container">
            <div class="esquerda"><input class="butal" type="button" value="VOLTAR"
                    onclick="location.href='../PaginaEditarM.php'"></div>
            <div class="direita"><img src="https://cdn-icons-png.flaticon.com/512/20/20093.png" alt=""></div>
        </div>

        <form action="disciplina.php" method="POST" id="formulario">
            <h2>Cadastro de Disciplina</h2>
            <div id="campos">
                <div class="box">
                    <label>Disciplina: <input type="text" name="materia"></label>
                    <label>Professor: <input type="text" name="professor"></label>
                    Curso:
                    <div class="skibid">
                        <?php
                                if ($result->num_rows > 0) {
                        ?>
                                    <select name="curso">   
                        <?php
                                    while ($row = $result->fetch_assoc()) {
                        ?>
                                        <option value="<?php echo $row['id_turma'];?>"><?php echo $row["ano"]?> - <?php echo $row["nome_turma"]?></option>
                        <?php
                                }
                        ?>
                                    </select>
                        <?php
                            } 
                        ?>
                        </select>
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