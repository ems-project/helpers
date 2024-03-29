<?php

declare(strict_types=1);

namespace EMS\Helpers\Tests\Unit\Standard;

use EMS\Helpers\Standard\Type;
use PHPUnit\Framework\TestCase;

class TypeTest extends TestCase
{
    public function testInt()
    {
        self::assertSame(11, Type::integer(11));
        $this->expectException(\RuntimeException::class);
        Type::integer('11');
    }

    public function testString()
    {
        self::assertSame('11', Type::string('11'));
        $this->expectException(\RuntimeException::class);
        Type::string(11);
    }
}
