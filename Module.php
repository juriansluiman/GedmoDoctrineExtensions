<?php

namespace GedmoDoctrineExtensions;

use Zend\Config\Config,
    Zend\Loader\AutoloaderFactory;

class Module
{
    public function init()
    {
        $this->initAutoloader();
    }

    protected function initAutoloader()
    {
        AutoloaderFactory::factory(array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            )
        ));
    }

    public function getConfig()
    {
        return new Config(include __DIR__ . '/configs/module.config.php');
    }
}
