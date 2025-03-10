<?php

$header = <<<'HEADER'
This file is part of the TranslationFormBundle package.

(c) David ALLIX <http://a2lix.fr>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
HEADER;

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@DoctrineAnnotation' => true,
        '@PHP70Migration' => true,
        '@PHP70Migration:risky' => true,
        '@PHP71Migration' => true,
        '@PHP71Migration:risky' => true,
        '@PHP73Migration' => true,
        '@PHPUnit75Migration:risky' => true,
        '@PhpCsFixer' => true,
        '@PhpCsFixer:risky' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'array_syntax' => ['syntax' => 'short'],
        'date_time_immutable' => true,
        'header_comment' => ['header' => $header],
        'general_phpdoc_annotation_remove' => true,
        'linebreak_after_opening_tag' => true,
        'list_syntax' => ['syntax' => 'short'],
        'no_superfluous_phpdoc_tags' => true,
        'php_unit_strict' => false,
        'php_unit_test_class_requires_covers' => false,
    ])
    ->setFinder(
        (new PhpCsFixer\Finder())
        ->exclude(['vendor'])
        ->in(['src', 'tests'])
    )
;
