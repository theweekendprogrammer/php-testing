<?php

use Testing\Test;

require_once __DIR__ . '/../vendor/autoload.php';

Test::run(
    "something better fail",
    function (Test $test) {
        $test->pass('Yup');
        $a = [];
        $a->bloo();
    }
);
