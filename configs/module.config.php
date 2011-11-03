<?php
return array(
    'di' => array(
        'instance' => array(
            'doctrine-container' => array(
                'parameters' => array(
                    'em' => array(
                        'default' => array(
                            'registry' => array(
                                'namespaces' => array(
                                    'Gedmo\\Mapping\\Annotation' => __DIR__ . '/../library/Gedmo/lib/'
                                )
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);