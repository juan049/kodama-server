<?php

function generical_response($ok = false, $data = null, $message = null, $error_message = null){
    return [
        'ok' => $ok,
        'data' => $data ? $data : [],
        'message' => $message ? $message : 'No message',
        "error" => $error_message
    ];
}