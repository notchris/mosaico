<?php

require  'medoo.php';

$hash = $_POST['hash'];
$meta = $_POST['metadata'];
$template = $_POST['template'];
 
$database = new medoo([
  'database_type' => 'mysql',
  'database_name' => '', // Your Database Name
  'server' => 'localhost', // Your Host
  'username' => '', // Username
  'password' => '', // Password
  'charset' => 'utf8'
]);

// Check Hash

$check_hash = $database->get("templates", "hash", [
	"hash" => $hash
]);

if (!$check_hash){
	$database->insert("templates", [
		"hash" => $hash,
		"metadata" => $meta,
		"template" => $meta
	]);
}

if ($check_hash = $hash){
	$database->update("templates", [
		"metadata" => $meta,
		"template" => $template
	],[
		"hash" => $hash
	]);
}

?>