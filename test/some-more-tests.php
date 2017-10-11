<?php

use Testing\Test;

require_once __DIR__ . '/../vendor/autoload.php';

Test::run(
    "we should be testing globs",
    function (Test $test) {
        $test->pass("more testing is good");
    }
);
