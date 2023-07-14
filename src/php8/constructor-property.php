<?php

class User {
    public function __construct(public string $auth){}
}

$user = new User("Admin");
echo $user->auth;