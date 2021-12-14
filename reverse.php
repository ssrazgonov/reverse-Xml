<?php

$filename = "input.xml";
$xmlText = file_get_contents(__DIR__ . "/" . $filename);

$charsToNotReverse = explode(',', "<,>,/,\,\",', ,?,=,-,");

$output = "";
$bufferWord = "";
$currChar = null;

for($pointer = 0; $pointer < strlen($xmlText); $pointer++) {
    $currChar = $xmlText[$pointer];

    if(in_array($currChar, $charsToNotReverse)) {
        $output .= $bufferWord . $currChar;
        $bufferWord = "";
        continue;
    }

    $bufferWord = $currChar . $bufferWord;
}

print_r($xmlText);
print_r(PHP_EOL);
print_r(PHP_EOL);
print_r(PHP_EOL);
print_r($output);