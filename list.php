<?php

    require  'medoo.php';
     
    $database = new medoo([
      'database_type' => 'mysql',
      'database_name' => '', // Your Database Name
      'server' => 'localhost', // Your Host
      'username' => '', // Username
      'password' => '', // Password
      'charset' => 'utf8'
    ]);

    $items = $database->select("template", "*");

    foreach($items as $item)
    {
    echo '<li class="list-group-item"><a href="editor.html?id='.$item['hash'].'&name='.$item['name'].'" class="pull-left template-name">'.$item['name'].'</a><div class="btn-group pull-right"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Options <span class="caret"></span></button><ul class="dropdown-menu"><li><a data-id="'.$item['hash'].'" class="rename" href="#">Rename</a></li><li><a data-id="'.$item['hash'].'" class="duplicate" href="#">Duplicate</a></li><li class="divider"></li><li><a data-id="'.$item['hash'].'" class="delete" class="text-danger" href="#">Delete</a></li></ul></div><div class="clearfix"></div></li>';
    }

?>