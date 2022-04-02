<?php

declare(strict_types=1);

namespace EMS\Helpers\html;

class Html
{
    public static function prettyPrint(?string $source): string
    {
        $source = $source ?? '';
        $formater = new \tidy();
        $formater->parseString($source, [
            'indent' => true,
        ]);

        return \str_replace(['<body>', '</body>', PHP_EOL.'  '], ['', '', PHP_EOL], $formater->body()->value);
    }

    public static function compare(?string $html1, ?string $html2): int
    {
        $html1 = $html1 ?? '';
        $html2 = $html2 ?? '';
        $formaterHtml1 = new \tidy();
        $formaterHtml1->parseString($html1);
        $formaterHtml2 = new \tidy();
        $formaterHtml2->parseString($html2);

        return \strcmp($formaterHtml1->html()->value, $formaterHtml1->html()->value);
    }
}
