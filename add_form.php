<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TAMBAH KANJI</title>
</head>
<body>
  <h2>TAMBAH DATA</h2>
  <div>
  <form action="add.php" method="POST">
    <table border="3" cellpadding="25" cellspacing="1">
      <tr>
        <th><label for="kanji">KANJI</label></th>
        <td><input type="text" name="kanji" id="kanji" htmlspecialchars></td>
      </tr>
      <tr>
      <th><label for="kunyomi">KUNYOMI</label></th>
      <td><input type="text" name="kunyomi" id="kunyomi" htmlspecialchars></td>
      </tr>
      <tr>
      <th><label for="onyomi">ONYOMI</label></th>
      <td><input type="text" name="onyomi" id="onyomi" htmlspecialchars ></td>
      </tr>
      <tr>
      <th><label for="word">Cara menggunakan</label></th>
      <th><textarea name="word" id="word" htmlspecialchars></textarea></th>
      </tr>
      <tr>
        <td><a href="list_kanji.php">&laquo; Kembali</a></td>
        <td> <button type="submit">SIMPAN</button></td>
      </tr>
    </table>
</form>
  </div>
</body>
</html>