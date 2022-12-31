<?php

function generical_response($ok = false, $data = null, $message = null, $errors = null){
    return [
        'ok' => true,
        'data' => $data ? $data : [],
        'message' => $message ? $message : 'No message',
        "errors" => $errors
    ];
}