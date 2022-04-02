<?php

declare(strict_types=1);

namespace EMS\Helpers\Tests\Unit\Html;

use EMS\Helpers\html\Html;
use PHPUnit\Framework\TestCase;

class TypeTest extends TestCase
{
    public function testInt()
    {
        self::assertEquals(0, Html::compare('   <p>Hello<p>', '<p>Hello<p>     '));
    }
}