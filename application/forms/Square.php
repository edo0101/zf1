<?php

class Application_Form_Square extends Zend_Form
{

    public function init()
    {

        $this->setAction('/contact/index')
            ->setMethod('post');

        $name = new Zend_Form_Element_Text('name');
        $name->setLabel('Name')
            ->setOptions(array('size' => '35'))
            ->setRequired(true)
            ->addValidator('NotEmpty', true)
            ->addValidator('Alpha', true)
            ->addFilter('HtmlEntities')
            ->addFilter('StringTrim');

        $email = new Zend_Form_Element_Text('Email');

        $email->setLabel('Email Address:');
        $email->setOptions(array('size' => '50'))
            ->setRequired(true)
            ->addValidator('NotEmpty', true)
            ->addValidator('EmailAddress', true)
            ->addFilter('HtmlEntities')
            ->addFilter('StringTrim')
            ->addFilter('StringToLower');

        $message=new Zend_Form_Element_Textarea('message');

        $message->setLabel('Message')
            ->setOptions(array('rows'=>'8', 'cols'=>'40'))
            ->setRequired(true)
            ->addValidator('NotEmpty', true)
            ->addFilter('HtmlEntities')
            ->addFilter('StringTrim');

        $captcha=new Zend_Form_Element_Captcha('captcha', array(
            'captcha'=>array(
                'captcha'=>'image',
                'wordLen'=>6,
                'timeout'=>300,
                'width'=>300,
                'height'=>100,
                'imgUrl'=>'/captcha',
                'imgDir'=>'',
                'font'=>''
            )
        ));

        $captcha->setLabel('Verification Code: ');

        $submit=new Zend_Form_Element_Submit('submit');
        $submit->setLabel('Send Message')
            ->setOptions(array('class'=>'submit'));

        $this->addElement($name)
            ->addElement($email)
            ->addElement($message)
            ->addElement($submit);
    }

}