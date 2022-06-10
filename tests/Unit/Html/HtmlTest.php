<?php

declare(strict_types=1);

namespace EMS\Helpers\Tests\Unit\Html;

use EMS\Helpers\Html\Html;
use PHPUnit\Framework\TestCase;

class TypeTest extends TestCase
{
    public function testInt()
    {
        self::assertEquals(0, Html::compare('   <p>Hello<p>', '<p>Hello<p>     '));
    }

    public function testPrettyPrint()
    {
        self::assertEquals('<div>
  <h1>
    Title
  </h1>
  <p>
    Hello
  </p>
</div>', Html::prettyPrint('<!-- comment --><div><h1>Title</h1><p>Hello</p></div>'));
    }

    public function testEmptyPrettyPrint()
    {
        self::assertEquals('', Html::prettyPrint(''));
    }

    public function testIsHtml()
    {
        self::assertEquals(false, Html::isHtml(''));
        self::assertEquals(false, Html::isHtml(null));
        self::assertEquals(false, Html::isHtml('Hello world'));
        self::assertEquals(false, Html::isHtml('Hello world>>>'));
        self::assertEquals(true, Html::isHtml('Hello <span>world</span>'));
        self::assertEquals(true, Html::isHtml('Hello <span>world</span> <!-- comment -->'));
        self::assertEquals(true, Html::isHtml('Hello <!-- comment -->'));
    }
}
