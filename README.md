# php-testing

small testing framework for php, inspired by substack/tape

## Usage

```php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Testing\Test;

Test::run("checking some sums", function (Test $t) {
    $t->equals(1 + 1, 2, "one plus one should be two");
    $t->equals(2 + 2, 4, "two plus two should be four");
});
```

## TODO

 - [ ] More documentation
 - [x] I still do not like Test::create(), there must be a cleaner syntax
 - [ ] Better tests :O
