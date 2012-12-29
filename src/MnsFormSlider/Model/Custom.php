<?php
namespace MnsFormSlider\Model;
use Zend\Form\Annotation as Form;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Custom
 *
 * @author Shankar Manamalkav <nshankar@ufl.edu>
 */
class Custom
{
    /**
     * @Form\Type("MnsFormSlider\Form\Element\Slider")
     * @Form\Options({"label":"What is your pain level?"})
     * @Form\Attributes({"min":"0","max":"100","leftAnchor":"Min","rightAnchor":"Max"})          
     * @Form\Validator({"name":"MnsFormSlider\Form\Element\SliderValidator"})    
     */   
    protected $painLevel;
    
    /**
     * @Form\Type("MnsFormSlider\Form\Element\Slider")
     * @Form\Options({"label":"How tall are you?"})
     * @Form\Attributes({"min":"0","max":"100","leftAnchor":"Short","rightAnchor":"Tall"})          
     * @Form\Validator({"name":"MnsFormSlider\Form\Element\SliderValidator"})    
     */   
    protected $height;
}
