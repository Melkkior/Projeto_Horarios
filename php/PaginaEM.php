<!-- salve como index.php -->
<?php
// Conexão com o banco de dados (ajuste para o seu ambiente)
$pdo = new PDO('mysql:host=localhost;dbname=escola;charset=utf8', 'usuario', 'senha');

// Inserção de novas matérias
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['materias'])) {
    foreach ($_POST['materias'] as $materia) {
        $nome = trim($materia['nome']);
        $professor = trim($materia['professor']);
        $cursos = isset($materia['cursos']) ? $materia['cursos'] : [];
        foreach ($cursos as $curso) {
            $stmt = $pdo->prepare("INSERT INTO materias (nome, professor, curso) VALUES (?, ?, ?)");
            $stmt->execute([$nome, $professor, $curso]);
        }
    }
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

// Busca as matérias agrupadas por curso
$cursos = ['INFO' => 'Informática', 'AGRO' => 'Agropecuária', 'MEIO' => 'Meio-Ambiente', 'ADM' => 'Administração'];
$materiasPorCurso = [];
foreach ($cursos as $sigla => $nome) {
    $stmt = $pdo->prepare("SELECT nome, professor FROM materias WHERE curso = ? ORDER BY nome");
    $stmt->execute([$sigla]);
    $materiasPorCurso[$sigla] = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Matérias</title>
    <link rel="stylesheet" href="css/PaginaEMes.css">
    <script>
        // Adiciona nova caixa de matéria
        function addMateriaBox() {
            const container = document.getElementById('materias-container');
            const idx = container.children.length;
            const html = `
            <div class="materia-box">
                <label>MATÉRIA:<br>
                    <input type="text" name="materias[${idx}][nome]" required>
                </label>
                <label>PROFESSOR:<br>
                    <input type="text" name="materias[${idx}][professor]" required>
                </label>
                <div class="cursos-group">
                    <label><input type="checkbox" name="materias[${idx}][cursos][]" value="INFO">INFO</label>
                    <label><input type="checkbox" name="materias[${idx}][cursos][]" value="AGRO">AGRO</label>
                    <label><input type="checkbox" name="materias[${idx}][cursos][]" value="ADM">ADM</label>
                    <label><input type="checkbox" name="materias[${idx}][cursos][]" value="MEIO">MEIO</label>
                </div>
            </div>
            `;
            container.insertAdjacentHTML('beforeend', html);
        }
        // Inicializa com 4 caixas
        window.onload = function() {
            for (let i = 0; i < 4; i++) addMateriaBox();
        }
    </script>
</head>
<body>
<div class="container">
    <!-- Formulário à esquerda -->
    <div class="form-section">
        <form method="post">
            <button type="submit" class="save-btn">SALVAR</button>
            <div id="materias-container"></div>
            <button type="button" class="add-btn" onclick="addMateriaBox()">+</button>
        </form>
    </div>
    <!-- Listagem à direita -->
    <div class="list-section">
        <?php foreach ($cursos as $sigla => $nome): ?>
        <div class="curso-card">
            <div class="curso-titulo <?= $sigla ?>"><?= strtoupper($nome) ?></div>
            <ul class="materias-list">
                <?php if (empty($materiasPorCurso[$sigla])): ?>
                    <li><em>Nenhuma matéria cadastrada</em></li>
                <?php else: ?>
                    <?php foreach ($materiasPorCurso[$sigla] as $mat): ?>
                        <li><?= htmlspecialchars($mat['nome']) ?> / <?= htmlspecialchars($mat['professor']) ?></li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
