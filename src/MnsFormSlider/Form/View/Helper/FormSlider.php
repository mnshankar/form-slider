<?php
/**
 * Description of Foo
 *
 * @author Shankar Manamalkav <nshankar@ufl.edu>
 */

namespace MnsFormSlider\Form\View\Helper;

use Zend\Form\ElementInterface;
use Zend\Form\View\Helper\AbstractHelper;

class FormSlider extends AbstractHelper
{

    public function render(ElementInterface $element)
    {
        $name = $element->getName();
        //initialize to -1 because:
        //1. Slider wont be rendered when empty (form load)
        //2. We want user to select a value
        $value = ($element->getValue() == '' ? -1 : $element->getValue());                
        $sliderid = $name.'-slider';
        $min = $element->getAttribute('min');
        $max = $element->getAttribute('max');        
        $leftAnchor = $element->getAttribute('leftAnchor');
        $rightAnchor = $element->getAttribute('rightAnchor');

        //generate the slider
        $str = "";

        $str = '<div class="row">
            <div class="span1">' . $leftAnchor . '</div>
            <div class="span5" id="' . $sliderid.'"></div>
            <div class="span2">' . $rightAnchor . '</div>            
            <input type="hidden" value="' . $value . '" id="' .
            $name . '" name="' . $name .'"/>
            </div><br/>';

        $str .= "<script type=\"text/javascript\">$('document').ready(function(){
            \$(\"#$sliderid\").slider({
                animate: true ,
            range: \"min\",
            value: $value,
            min: $min,
            max: $max,
            slide: function(event, ui) {\$(\"#$name\").val(ui.value)}
            });
        });
            ";
        $str.= "\$(\"#$sliderid\").css('cursor', 'pointer');";
        $str.= "</script>";
        return $str;
    }

}
