<?php
  // Подключение файла с функциями;
  require __DIR__ . "/func.php";
  // В возвращаемом массиве будут хранится только id и название статьи;
  $m_min = db_all();
  require __DIR__ . "/../views/sections.php";
?>