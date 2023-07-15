<?php

namespace PHP81;

class User {
    public readonly int $uid;

    public function __construct(int $uid) {
        $this->uid = $uid;
    }
}

$user = new User(132);
// $user->uid = 43; // Not allowed.
echo $user->uid;