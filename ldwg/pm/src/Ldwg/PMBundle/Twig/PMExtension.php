<?php

namespace Ldwg\PMBundle\Twig;

class PMExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'twig.extension.pm';
    }

    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('pm', [$this, 'pm']),
        ];
    }

    public function pm()
    {
        return '++';
    }
}
