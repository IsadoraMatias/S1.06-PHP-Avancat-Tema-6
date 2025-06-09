<?php
function showFunction()
{
    echo "El nombre de la función es: " . __FUNCTION__ . PHP_EOL;
    echo "El nombre del archivo es: " . __FILE__ . PHP_EOL;
    echo "El directório del archivo es: " . __DIR__;
}
showFunction();
