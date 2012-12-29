<?php

namespace MnsFormSlider\Form\Element;

use Zend\Validator\AbstractValidator;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BarValidator
 *
 * @author Shankar Manamalkav <nshankar@ufl.edu>
 */
class SliderValidator extends AbstractValidator
{

    const INVALID = 'required';

    protected $messageTemplates = array(
        self::INVALID => "You must move the slider. To indicate 0 value, move the slider forward 
            and then back to Zero.",
    );

    public function isValid($value)
    {      
        if (($value === null) or ($value == -1) or ($value == "")) {
            $this->error(self::INVALID, $value);
            return false;
        }
        return true;
    }

}
