<html>
<head>
  <meta http-equiv = "content-type" content = "text/html; charset=utf-8">
  <title>Список статей</title>
</head>
<body>
  <h2>
    Список статей
  </h2>
  <?php foreach ($m_min as $a => $b): ?>
  <h4>
    <a href="sec-one.php?id=<?php echo $b['id']; ?>">
      <?php echo $b['name']?>
    </a>
  </h4>    
  <?php endforeach; ?>
  <a href="add.php">
    Добавить статью
  </a>
</body>
</html>