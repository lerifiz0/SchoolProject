<?php
function randomCodeGenerator() {
    $codes = [
        "Hello, World!",
        "PHP Code Generator",
        "This is a PHP code example.",
        "Generate Random Text",
        "Random String"
    ];

    $randomIndex = mt_rand(0, count($codes) - 1);
    return $codes[$randomIndex];
}
?>
