<?php

namespace PHP8;
class Authenticate {
    public static function getInstance(): static {
        return new static();
    }

    public function userInfo(): string {
        return "Admin";
    }
}

$auth = Authenticate::getInstance()->userInfo();
echo $auth;