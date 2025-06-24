<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Matérias</title>
    <link rel="stylesheet" href="css/disciplina.css">
</head>

<body>
    <div class="corpo">
        <div class="container">
            <div class="esquerda"><input class="butal" type="button" value="VOLTAR" onclick="location.href="></div>
            <div class="direita"><img src="https://cdn-icons-png.flaticon.com/512/20/20093.png" alt=""></div>
        </div>

        <form action="salvar.php" method="POST" id="formulario">
            <h2>Cadastro de Matérias</h2>
            <div id="campos">
                <div class="box">
                    <label>Matéria: <input type="text" name="materia[]"></label>
                    <label>Professor: <input type="text" name="professor[]"></label>
                    Curso:
                    <div class="skibid">
                        <label><input type="radio" name="curso[0]" value="info"> Info</label>
                        <label><input type="radio" name="curso[0]" value="agro"> Agro</label>
                        <label><input type="radio" name="curso[0]" value="meio"> Meio</label>
                        <label><input type="radio" name="curso[0]" value="adm"> Adm</label>
                    </div>
                </div>
            </div>
            <div class="footer">
                <input type="button" class="botao" value="Cancelar">
                <input type="submit" class="botao" value="Salvar">
            </div>
        </form>
    </div>
</body>

</html>