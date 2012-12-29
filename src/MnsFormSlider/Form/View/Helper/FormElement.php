<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormElement
 *
 * @author Shankar Manamalkav <nshankar@ufl.edu>
 */

namespace MnsFormSlider\Form\View\Helper;

use MnsFormSlider\Form\Element;
use Zend\Form\View\Helper\FormElement as BaseFormElement;
use Zend\Form\ElementInterface;

class FormElement extends BaseFormElement
{

    public function render(ElementInterface $element)
    {
        $renderer = $this->getView();
        if (!method_exists($renderer, 'plugin')) {
            // Bail early if renderer is not pluggable
            return '';
        }

        if ($element instanceof Element\Slider) {
            $helper = $renderer->plugin('formslider');
            return ($helper->render($element));            
        }

        return parent::render($element);
    }

}

