<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Sanitizar HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}