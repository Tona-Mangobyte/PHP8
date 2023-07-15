<?php

class SimpleCount implements Countable
{
    public function __construct(public readonly array $names){}

    public function count(): int
    {
        return count($this->names);
    }
}


$simple = new SimpleCount(["Tona", "Long"]);

echo $simple->count();