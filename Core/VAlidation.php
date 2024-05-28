<?php


namespace Core;

class Validator
{

    public function string($value)
    {
        return strlen($value) === 0;
    }
}