<?php

function parse_value(string|int|float $value): string|null {
    if (empty($value)) {
        return null;
    }
    return $value;
}

echo parse_value("23");