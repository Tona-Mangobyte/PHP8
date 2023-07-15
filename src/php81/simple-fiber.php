<?php

/*new Fiber('var_dump');
new Fiber(fn(string $message) => print $message);
new Fiber(function(string $message): void {
    print $message;
});*/

$fiber = new Fiber(fn(string $message) => print $message . PHP_EOL);
$fiber->start('Hi');

$fiber2 = new Fiber(function() {
    Fiber::suspend(42);
});
$return = $fiber2->start();
echo $return . PHP_EOL;

$fiber3 = new Fiber(function() {
    echo "Suspending...\n";
    Fiber::suspend();
    echo "Resumed!";
});
$fiber3->start();
echo "Resuming...\n";
$fiber3->resume();