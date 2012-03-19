<?php

namespace GedmoDoctrineExtensions;

use Zend\Module\Consumer\AutoloaderProvider,
    Doctrine\Common\Annotations\AnnotationRegistry;

class Module implements AutoloaderProvider
{
    public function init()
    {
        $namespace = 'Gedmo\Mapping\Annotation';
        $lib       = __DIR__ . '/library/Gedmo/lib/';
        AnnotationRegistry::registerAutoloadNamespace($namespace, $lib);
    }
    
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            )
        );
    }
}
