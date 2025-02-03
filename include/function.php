<?php

function e($value){
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}