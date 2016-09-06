<?php
  // Ф-ция подключения к БД: принимает SQL-запрос, возвращает ресурс;
  function db_conect($z) {
    mysql_connect('localhost', 'root', '');
    mysql_select_db('geek');
    mysql_set_charset("utf8");
    return mysql_query($z);
  }
  
  // Ф-ция добавления новой записи: принимает название и текст статьи, возвращает 1 или 0;
  function db_add($t1, $t2) {
    $b = 'INSERT INTO news (name, textp) VALUES (' . "'" . $t1 . "'" . ',' . "'" . $t2 . "'" . ')';
    return db_conect($b);
  }
  
  // Ф-ция вывода id и названия всех статей;
  function db_all() {
    $b = 'SELECT id,name FROM news';
    $res = db_conect($b);
    $m = [];
    while ($row = mysql_fetch_assoc($res)) {
      $m[] = $row;
    }
    return $m;
  }
  
  // Ф-ция выбора конкретной статьи, принимает номер статьи, а передает массив с названием и текстом этой статьи;
  function db_one($n) {
    $b = "SELECT * FROM news WHERE id='" . $n . "'";
    $res = db_conect($b);
    $m = [];
    while ($row = mysql_fetch_assoc($res)) {
      $m[] = $row;
    }
    return $m;
  }
  
  // Ф-ция удаления конкретной статьи по ее id, принимает id, возвращает 1 или 0;
  function db_del($n) {
    $b = "DELETE FROM news WHERE id='" . $n . "'";
    return db_conect($b);
  }
  
  // Ф-ция изменения конкретной статьи, принимает id и новые название и текст статьи, возвращает 1 или 0;
  function db_edit($n, $t1, $t2) {
    $b = "UPDATE news SET name='" . $t1 . "',textp='" . $t2 . "' WHERE id='" . $n . "'";
    return db_conect($b);
  }
?>