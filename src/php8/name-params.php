<?php

function info(string $first_name, string $last_name): string {
    return "FIRST_NAME: $first_name & LAST_NAME: $last_name";
}

echo info(first_name: "Tona", last_name: "Chheun");
