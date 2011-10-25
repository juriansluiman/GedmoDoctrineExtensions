<?php

namespace GedmoDoctrineExtensions;

class Module
{
    public function init()
    {
        $this->initAutoloader();
    }

    protected function initAutoloader()
    {
        require __DIR__ . '/autoload_register.php';
    }
}
