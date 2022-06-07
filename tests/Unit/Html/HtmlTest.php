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
        self::assertEquals('
<div>
  <h1>
    Title
  </h1>
  <p>
    Hello
  </p>
</div>
', Html::prettyPrint('<div><h1>Title</h1><p>Hello</p></div>'));
    }
}
