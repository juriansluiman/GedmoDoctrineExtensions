<?php

namespace GedmoDoctrineExtensions;

use Zend\Loader\AutoloaderFactory,
    Doctrine\Common\Annotations\AnnotationRegistry;

class Module
{
    public function init()
    {
        $this->initAutoloader();
        $this->initDoctrineAnnotations();
    }

    protected function initAutoloader()
    {
        AutoloaderFactory::factory(array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            )
        ));
    }

    /**
     * Initialize the Doctrine Gedmo annotation mapping.
     */
    public function initDoctrineAnnotations()
    {
        $namespace = 'Gedmo\Mapping\Annotation';
        $lib       = __DIR__ . '/library/Gedmo/lib/';
        AnnotationRegistry::registerAutoloadNamespace($namespace, $lib);
    }
}
