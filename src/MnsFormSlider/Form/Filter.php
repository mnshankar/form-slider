<?php
namespace MnsFormSlider\Form;

use Zend\InputFilter\InputFilter;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Filter
 *
 * @author Shankar Manamalkav <nshankar@ufl.edu>
 */
class Filter extends InputFilter
{
    public function __construct()
    {
        $this->add(array(
            'name'       => 'mytest',
            'validators' => array(
                array(
                    'name' => 'MnsFormSlider\Form\Element\SliderValidator',            
                )
            )
        ));
    }
}