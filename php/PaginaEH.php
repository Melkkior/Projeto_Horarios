<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Horário - Segunda-feira (Editável)</title>
  <style>
    body {
      background: #fff;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .container {
      width: 98%;
      margin: 15px auto;
      border: 4px solid #444;
      border-radius: 10px;
      background: #fff;
      box-sizing: border-box;
      padding-bottom: 18px;
    }
    .header {
      background: #555;
      color: #fff;
      font-size: 2.2em;
      text-align: center;
      padding: 8px 0 8px 0;
      letter-spacing: 2px;
      border-radius: 6px 6px 0 0;
    }
    table {
      border-collapse: collapse;
      width: 100%;
      margin: 0 auto;
      background: #fff;
    }
    th, td {
      border: 2px solid #222;
      padding: 8px 5px;
      text-align: center;
      min-width: 50px;
      font-size: 1em;
    }
    th {
      background: #388e3c;
      color: #fff;
      font-size: 1em;
      font-weight: bold;
      border-bottom: 3px solid #222;
    }
    .row-title {
      background: #888;
      color: #fff;
      font-weight: bold;
      border-right: 3px solid #222;
    }
    .break {
      background: #f4b183;
      color: #222;
      font-weight: bold;
    }
    select {
      width: 100%;
      padding: 3px 2px;
      font-size: 1em;
      border-radius: 3px;
      border: 1px solid #aaa;
      background: #fff;
    }
    .footer {
      margin-top: 15px;
      background: #e0e0e0;
      border: 2px solid #444;
      border-radius: 0 0 8px 8px;
      padding: 10px;
      font-size: 1em;
      color: #222;
      width: 97%;
      margin-left: auto;
      margin-right: auto;
      box-sizing: border-box;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">segunc</div>
    <form>
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
      <!-- Função para gerar linha editável -->
      <!-- ADM 1 -->
      <tr>
        <td class="row-title">ADM 1</td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td class="break">---</td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td class="break">---</td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td class="break">---</td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
      </tr>
      <!-- Copie e cole a linha acima para cada turma, alterando apenas a primeira célula (row-title) -->
      <!-- Para agilizar, abaixo estão todas as linhas já prontas, basta copiar o conteúdo das células <td> da linha anterior -->
      <tr>
        <td class="row-title">ADM 2</td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td class="break">---</td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td class="break">---</td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td class="break">---</td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
      </tr>
      <tr>
        <td class="row-title">ADM 3</td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td class="break">---</td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td class="break">---</td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td class="break">---</td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
        <td><select><option>TEXTO</option><option>Matemática</option><option>Português</option><option>História</option><option>Geografia</option><option>Biologia</option><option>Química</option><option>Física</option><option>Inglês</option><option>Educação Física</option><option>Artes</option><option>Informática</option><option>Administração</option></select></td>
      </tr>
      <!-- Repita o mesmo padrão para AGRO 1, AGRO 2, AGRO 3, INFO 1, INFO 2, INFO 3, MEIO 1, MEIO 2, MEIO 3 -->
      <!-- Por questão de espaço, só mostrei ADM 1, 2 e 3. Para as demais linhas, basta copiar as células acima e alterar apenas o nome da turma -->
      <!-- ... -->
    </table>
    </form>
    <div class="footer">
      Aviso: guilherme
    </div>
  </div>
</body>
</html>
