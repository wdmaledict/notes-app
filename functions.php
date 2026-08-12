<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function authorize($condition, $statusCode = Response::FORBIDDEN) {
    if (! $condition) {
        abort($statusCode);
    }
}