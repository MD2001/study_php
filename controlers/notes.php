<?php

$config=require('Config.php');

$db= new DataBase($config['database']);

$id=array_key_exists("id",$_GET) ? $_GET["id"] : 1 ;        // this line for test the code without error

$notes=$db->query('select * from post where user_id= :id',['id'=>$id])->findall();

$name_Banner="My Notes";

//  dd($_SERVER);

require "Views/notes.view.php";