<?php

namespace MnsFormSlider;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Module
{

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getViewHelperConfig()
    {
        return array(
            'invokables' => array(
                'formelement' => 'MnsFormSlider\Form\View\Helper\FormElement',
                'formslider' => 'MnsFormSlider\Form\View\Helper\FormSlider',               
            ),
        );
    }   

}

?>
