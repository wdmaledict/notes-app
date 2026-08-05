<?php

function authorize($condition, $statusCode = Response::FORBIDDEN) {
    if (! $condition) {
        abort($statusCode);
    }
}