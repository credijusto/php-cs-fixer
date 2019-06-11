<?php

namespace Credijusto\PhpCsFixer;

class Config extends \PhpCsFixer\Config
{
    /**
     * {@inheritdoc}
     */
    public static function create()
    {
        return parent::create()
            ->setRules([
                '@Symfony' => true,
                'array_syntax' => ['syntax' => 'short'],
                'concat_space' => ['spacing' => 'one'],
                'ordered_imports' => true,
                'phpdoc_order' => true,
                'phpdoc_align' => false,
                'yoda_style' => false,
            ])
            ->setIndent("\t")
            ->setLineEnding("\r\n");
    }
}
