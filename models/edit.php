<?php
  require __DIR__ . "/func.php";
  if (!isset($_GET['id'])) {
      echo 'Ошибка передачи';
      exit;
  }
  $m_max = db_one($_GET['id']);
  if (isset($_POST['na']) && isset($_POST['te'])) {
    $b = db_edit($_GET['id'], $_POST['na'], $_POST['te']);
    if (false == $b) {
      echo 'Ошибка изменения!';
      exit;
    }
    require __DIR__ . "/../views/edit2.php";
    exit;
  } else {
    require __DIR__ . "/../views/edit.php";
  }
?>