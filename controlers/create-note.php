<?php


$config = require('Config.php');

$db = new DataBase($config['database']);
$error = [];



if ($_SERVER['REQUEST_METHOD'] === "POST")                //just use in first enter to the controler 
{


    $NoteLen = strlen($_POST["Note"]);
    $discLen = strlen($_POST["Discription"]);


    if ($NoteLen != 0) {
        if ($discLen != 0) {
            $db->query(
                "INSERT INTO `post` (`Note`, `user_id`, `Discription`) 
        VALUES(:Note, 1, :Discription)",
                [
                    "Note" => $_POST["Note"],
                    "Discription" => $_POST['Discription']
                ]
            );
        } else {
            $error['Discription'] = "the Discrption field is empty";
        }
    } else {
        $error['Note'] = "the Note field is empty";
    }
}

$name_Banner = "Create Note";

require "Views/create-note.view.php";
