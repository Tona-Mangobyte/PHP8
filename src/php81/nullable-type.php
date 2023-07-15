<?php

function simple(?string $name) {
    return $name;
}

echo simple("Tona") . PHP_EOL;
echo simple(null);