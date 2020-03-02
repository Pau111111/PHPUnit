<?php

use PHPUnit\Framework\TestCase;
use Util;

final class UtilTest extends TestCase
{
    function test_convertToSlug(): void
    {
        $util = new Util();
        $this->assertEquals('hola-soy-una-nueva-url',
        $util->convertToSlug('Hola soy una nueva Url')
        );
        /* 
        * ASSERT
        * CONSTRAINT
        * ERROR
        * EXCEPTION
        */
    }
}