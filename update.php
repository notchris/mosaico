<?php
$action = $_POST['action'];
$name = $_POST['name'];
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

if ($action = 'rename'){
    $database->update("template", [
      "name" => $name
    ],[
      "hash" => $hash
    ]);
}

if ($action = 'delete'){
    $database->delete("template", [
      "AND" => [
        "hash" => $hash
      ]
    ]);
}

// Duplicate, not yet implemented

/*if ($action = 'duplicate'){
    $datas = $database->select("template", [
      "name",
      "hash",
      "metadata",
      "content",
      "html"
    ], [
      "hash" => $hash
    ]);
    foreach($datas as $data)
    {
    $database->insert("template", [
      "name" => $data['name']."-Copy",
      "hash" => $copy,
      "metadata" => $data['metadata'],
      "content" => $data['content'],
      "html" => $data['html']
    ]);
    }  
}*/


?>