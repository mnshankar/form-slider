<?php

namespace MnsFormSlider\Form;

use Zend\Form\Form;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Custom
 *
 * @author Shankar Manamalkav <nshankar@ufl.edu>
 */
class Custom extends Form
{

    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('album');
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'mytest',
            'type' => '\MnsFormSlider\Form\Element\Slider',            
            'attributes' => array(                               
                'min' => 0,
                'max' => 100,
                'leftAnchor' => 'Min',
                'rightAnchor' => 'Max',
            ),
           
        ));
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Save',
                'id' => 'submitbutton',
                'class' => 'btn btn-success btn-large'
            ),
        ));
    }

}
