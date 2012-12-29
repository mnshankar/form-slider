<?php

namespace MnsFormSlider\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexController
 *
 * @author Shankar Manamalkav <nshankar@ufl.edu>
 */
class IndexController extends AbstractActionController
{

    //custom form element using form annotations
    public function annotationAction()
    {
        $this->getViewHelper('HeadScript')->appendFile('http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js');
        $builder = new \Zend\Form\Annotation\AnnotationBuilder();
        $form = $builder->createForm(new \MnsFormSlider\Model\Custom());

        //add a submit button to form
        $form->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Save',
                'id' => 'submitbutton',
                'class' => 'btn btn-success btn-large'
            ),
        ));
        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                var_dump($form->getData());
            }
        }
        return array('form' => $form);
    }

    //custom form element using regular form and filter
    public function indexAction()
    {
        $this->getViewHelper('HeadScript')->appendFile('http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js');
        $form = new \MnsFormSlider\Form\Custom();
        $filter = new \MnsFormSlider\Form\Filter();
        $form->setInputFilter($filter);
        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                var_dump($form->getData());
            }
        }
        return array('form' => $form);
    }

    protected function getViewHelper($helperName)
    {
        return $this->getServiceLocator()->get('viewhelpermanager')->get($helperName);
    }

}
