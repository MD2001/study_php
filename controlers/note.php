<?php

$config = require('Config.php');

$db = new DataBase($config['database']);

$notes = $db->query('select * from post where  id= :id', [


    'id' => $_GET["id"]

])->findOrFail();

$name_Banner = "My Note";


athrauzation($notes['user_id'] === 1);


//   dd($notes);

require "Views/note.view.php";
