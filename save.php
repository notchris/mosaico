<?php
$name = $_POST['name'];
$hash = $_POST['hash'];
$metadata = $_POST['metadata'];
$content = $_POST['content'];
$html = $_POST['html'];

require  'medoo.php';
 
$database = new medoo([
  'database_type' => 'mysql',
  'database_name' => '', // Your Database Name
  'server' => 'localhost', // Your Host
  'username' => '', // Username
  'password' => '', // Password
  'charset' => 'utf8'
]);

  $check = $database->get("template", "hash", [
    "hash" => $hash
  ]);

  if (!$check){
    $database->insert("template", [
      "name" => $name,
      "hash" => $hash,
      "metadata" => $metadata,
      "content" => $content
    ]);
  }

  if ($check = $hash){
    $database->update("template", [
      "metadata" => $metadata,
      "content" => $content
    ],[
      "hash" => $hash
    ]);
  }
?>