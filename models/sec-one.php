<?php
  require __DIR__ . "/func.php";
  if(!isset($_GET['id'])) {
    echo 'Ошибка отображения статьи';
    exit;
  }
  $m_max = db_one($_GET['id']);
  require __DIR__ . "/../views/sec-one.php";
?>