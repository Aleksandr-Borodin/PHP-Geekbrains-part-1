<?php 
  require __DIR__ . "/func.php";
  if(!isset($_GET['id'])) {
    echo 'ошибка удаления статьи';
    exit;
  }
  $a = db_del($_GET['id']);
  if (!$a) {
    echo 'Ошибка удаления статьи';
    exit;
  }
  require __DIR__ . "/../views/delete.php";
?>