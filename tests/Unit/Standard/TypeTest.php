<?php

declare(strict_types=1);

namespace EMS\Helpers\Tests\Unit\Standard;

use PHPUnit\Framework\TestCase;
use EMS\Helpers\Standard\Type;

class TypeTest extends TestCase
{
    public function testInt()
    {
        self::assertSame(11, Type::integer(11));
    }
}