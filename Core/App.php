<?php


namespace Core;

class App
{
    protected static $Container;
    public static function setContainer($Container)
    {
        static :: $Container = $Container;
    } 


    public static function getContainer()
    {
        return static :: $Container ;
    } 
}