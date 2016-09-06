<html>
<head>
  <meta http-equiv = "content-type" content = "text/html; charset=utf-8">
  <title>Вывод конкретной статьи</title>
</head>
<body>
  <h2>
    <?php echo $m_max[0]['name']; ?>
  </h2>
  <p>
    <?php echo $m_max[0]['textp']; ?>
  </p>
  <br>
  <a href="edit.php?id=<?php echo $m_max[0]['id']; ?>">
    Редактировать статью
  </a>
  <br>
  <a href="delete.php?id=<?php echo $m_max[0]['id']; ?>">
    Удалить эту статью
  </a>
</body>
</html>