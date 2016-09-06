<html>
<head>
  <meta http-equiv = "content-type" content = "text/html; charset=utf-8">
  <title>Изменить статью</title>
</head>
<body>
  <h2>
    Изменить статью
  </h2>
  <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="post">
    <input type="text" name="na" value="<?php echo $m_max[0]['name']; ?>" required>
    <br>
    <textarea rows="10" cols="100" name="te"><?php echo $m_max[0]['textp']; ?></textarea>
    <br>
    <input type="submit" value="Сохранить">
  </form>

</body>
</html>