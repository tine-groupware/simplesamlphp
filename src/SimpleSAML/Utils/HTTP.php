<?php

declare(strict_types=1);

namespace SimpleSAML\Utils;

if (PHP_VERSION_ID < 80500) {
    class HTTP extends HTTP84 {}
} else {
    class HTTP extends HTTP85 {}
}
