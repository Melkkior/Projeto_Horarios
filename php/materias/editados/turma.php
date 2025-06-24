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

        <form action="salvar.php" method="POST" id="formulario">
            <h2>Cadastro de Turma</h2>
            <div id="campos">
                <div class="box">
                    <label>Turma: <input type="text" name="materia[]"></label>
                    ano:
                    <div class="skibid">
                        <label><input type="radio" name="curso[0]" value="info"> 1º ano</label>
                        <label><input type="radio" name="curso[0]" value="agro"> 2º ano</label>
                        <label><input type="radio" name="curso[0]" value="meio"> 3º ano</label>
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