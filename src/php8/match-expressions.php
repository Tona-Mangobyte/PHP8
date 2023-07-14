<?php

function adminInfo(): string {
    return "User admin";
}
function userInfo(): string {
    return "User normal";
}
function userAccess(string $info): string {
    return match($info) {
        'admin' => adminInfo(),
        'normal' => userInfo(),
    };
}

echo userAccess("normal");