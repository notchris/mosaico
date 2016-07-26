<?php

    $hash = $_POST['hash'];

    require  'medoo.php';
     
    $database = new medoo([
      'database_type' => 'mysql',
      'database_name' => '', // Your Database Name
      'server' => 'localhost', // Your Host
      'username' => '', // Username
      'password' => '', // Password
      'charset' => 'utf8'
    ]);

    $items = $database->select("template", [
      "metadata",
      "content"
    ],[
      "hash" => $hash
    ]);

    foreach($items as $item)
    {
        echo "[{$item['metadata']},{$item['content']}]";
    }

?>