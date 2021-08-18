<?php

const AMOUNT_ARRAY = 2;

spl_autoload_register(function ($className)
{
    include $className . '.php';
});

$result = new government;
$result -> inputGovernment();
$result -> outputGovernment();