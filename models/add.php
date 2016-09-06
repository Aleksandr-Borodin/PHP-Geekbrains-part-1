<?php
  require __DIR__ . "/func.php";
  if (isset($_POST['na']) && isset($_POST['te'])) {
    $b = db_add($_POST['na'], $_POST['te']);
    if (false == $b) {
      echo 'Ошибка добавления статьи';
    }
    require __DIR__ . "/../views/add2.php";
    exit;
  }
  require __DIR__ . "/../views/add.php";
?>