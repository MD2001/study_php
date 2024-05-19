<?php

function dd ($Copy_var)
{

    echo "<pre>";
    var_dump($Copy_var);
    echo "</pre>";
    die();

}

function urlis($url)
{
    return $_SERVER["REQUEST_URI"]=== $url;
}


function athrauzation($cindition,$states=Response::UNOTHRAIZED)
{
    if(!$cindition){

        abort($states);
    }
}