<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/spec')
;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        'binary_operator_space' => array(
            'align_equals' => true,
            'align_double_arrow' => true,
        ),
        '@Symfony:risky' => true,
        'array_syntax' => ['syntax' => 'short'],
        'linebreak_after_opening_tag' => true,
        'mb_str_functions' => true,
        'no_php4_constructor' => true,
        'no_unreachable_default_argument_value' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'ordered_imports' => true,
        'phpdoc_order' => true,
        'semicolon_after_instruction' => true,
        'strict_comparison' => true,
        'strict_param' => true,
        'concat_space' => ['spacing' => 'one'],
        'trailing_comma_in_multiline_array' => false
    ])
    ->setFinder($finder)
    ->setCacheFile(__DIR__ . '/.php_cs.cache')
    ;