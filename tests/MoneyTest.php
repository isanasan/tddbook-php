<?php

namespace isanasan\phptddbook;

use function PHPUnit\Framework\assertEquals;

final class MoneyTest extends TestCase
{
    public function MoneyTest() {
        $five = new Dollar(5);
        $five->times(2);
        assertEquals(10,$five->amount);
    }
}
