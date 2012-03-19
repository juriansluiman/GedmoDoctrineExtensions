GedmoDoctrineExtensions
===
This submodule is to provide the Gedmo doctrine extensions of Gediminas Morkevicius. The project can be found on github here: https://github.com/l3pp4rd/DoctrineExtensions

Requirements
---
  - [DoctrineModule](http://www.github.com/doctrine/DoctrineModule)
  - [DoctrineORMModule](http://www.github.com/doctrine/DoctrineORMModule)
  - [Zend Framework 2](http://www.github.com/zendframework/zf2)


Installation
---
The simplest way to install is to clone the repository into your /vendor directory add the 
GedmoDoctrineExtensions key to your modules array before your Application module key.

  1. cd my/project/folder
  2. git clone git://github.com/juriansluiman/GedmoDoctrineExtensions.git vendor/GedmoDoctrineExtensions --recursive
  3. open my/project/folder/configs/application.config.php and add 'GedmoDoctrineExtensions' to your 'modules' parameter.

Usage
---
You need to add the namespace of your entities to the Doctrine driver chain and add the required event listeners to the event manager.
To add entities using annotations and add a listener, this is a sample configuration:

```php
return array(
    'di' => array(
        'instance' => array(
            
            // Set Doctrine annotations in driver chain

            // orm_driver_chain is an alias for DoctrineORMModule\Doctrine\ORM\DriverChain
            'orm_driver_chain' => array(
                'parameters' => array(
                    'drivers' => array(
                        'a_unique_key_here' => array(
                            'class'     => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                            'namespace' => 'ModuleName\Entity',
                            'paths'     => array(__DIR__ . '/../src/ModuleName/Entity')
                        ),
                    ),
                ),
            ),
            
            // Set Gedmo tree subscriber
            'orm_evm' => array(
                'parameters' => array(
                    'opts' => array(
                        'subscribers' => array('Gedmo\Tree\TreeListener')
                    )
                )
            ),
        ),
    ),
);
```

You need a unique key to let the recursive merging do the work. A recommended approach is your module name for this. Notice how the namespace and paths need to be updated with the module namespace as well.