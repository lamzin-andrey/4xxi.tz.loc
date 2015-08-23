<?php
namespace StudyApp\CommentBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CommentType extends AbstractType {
	
    private $_method = 'POST'; //для обеспечения работы handleRequest при PATCH запросе можно установить метод PATCH
    
    public function __construct($method = 'POST') {
        $this->_method = $method;
    }
    
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder->add('body')
                ->add('parent_id')
                ->add('id')
                ->setMethod($this->_method);
	}
	
	public function getName() {
		return 'comment_type';
	}
}
