<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/backend')
    ->in(__DIR__.'/common')
    ->in(__DIR__.'/console')
    ->in(__DIR__.'/frontend')
    ->exclude('tests/_support/_generated')
;

$config = new PhpCsFixer\Config();
return $config
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        'echo_tag_syntax' => [
            'format' => 'short',
        ],
        'native_function_invocation' => [
            'scope' => 'namespaced',
        ],
        'no_unused_imports' => true,
        'ordered_imports' => true,
        'phpdoc_align' => false,
        'phpdoc_summary' => false,
        'phpdoc_to_comment' => false,
    ])
    ->setFinder($finder)
;
