<?php

$app = include __DIR__ . "/../src/App/bootstrap.php"; 

echo __DIR__;
echo '<br>';
echo '<br>';
echo dirname(__DIR__);
echo '<br>';

$app->run();