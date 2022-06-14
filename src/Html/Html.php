<?php

declare(strict_types=1);

namespace EMS\Helpers\Html;

class Html
{
    public static function prettyPrint(?string $source): string
    {
        $source = $source ?? '';
        $formatter = new \tidy();
        $formatter->parseString($source, [
            'indent' => true,
            'indent-spaces' => 2,
            'newline' => 'LF',
            'wrap' => 0,
        ]);

        return \str_replace(["<body>\n  ", "\n</body>", "\n  ", '<body>'], ['', '', "\n", ''], $formatter->body()->value);
    }

    public static function compare(?string $html1, ?string $html2): int
    {
        $html1 = $html1 ?? '';
        $html2 = $html2 ?? '';
        $formatterHtml1 = new \tidy();
        $formatterHtml1->parseString($html1);
        $formatterHtml2 = new \tidy();
        $formatterHtml2->parseString($html2);

        return \strcmp($formatterHtml1->html()->value, $formatterHtml1->html()->value);
    }

    public static function isHtml(?string $source): bool
    {
        $source = $source ?? '';

        return $source !== \strip_tags($source);
    }

}
