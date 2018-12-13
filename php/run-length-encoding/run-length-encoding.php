<?php

function encode ($input)
{
    return preg_replace_callback('/(.)\1*/', function($match) {
        return (strlen($match[0]) === 1 ? $match[1] : strlen($match[0]) . $match[1]);
    }, $input);
}

function decode($input)
{
    return preg_replace_callback('/(\d+)(\D)/', function($match) {
        return str_repeat($match[2], $match[1]);
    }, $input);
}