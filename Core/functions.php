<?php

use Core\Response;

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

function base_path($path)
{
    return BaseBase.$path;
}
function view($path,$arrtipute=[])
{
    extract($arrtipute);
    require  base_path("Views/" . $path );
}

function base_path_requier($path)
{
    return require  base_path($path);
}