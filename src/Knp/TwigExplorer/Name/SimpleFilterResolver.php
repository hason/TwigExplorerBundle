<?php

namespace Knp\TwigExplorer\Name;

use Knp\TwigExplorer\Name\ResolverInterface;

class SimpleFilterResolver implements ResolverInterface
{
    public function supports($element)
    {
        return $element instanceof \Twig_SimpleFilter
            || $element instanceof \Twig_SimpleFunction;
    }

    public function getName($key, $element)
    {
        return $element->getName();
    }
}
