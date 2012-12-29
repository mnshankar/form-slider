<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
return array(
    'controllers' => array(
        'invokables' => array(
            'MnsFormSlider\Controller\Index' => 'MnsFormSlider\Controller\IndexController'
        ),
    ),
    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'form' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/form[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'MnsFormSlider\Controller\Index',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    )
);
?>
