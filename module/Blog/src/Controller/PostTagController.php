<?php
/**
 * Created by PhpStorm.
 * User: dyuelber1
 * Date: 26/12/18
 * Time: 15:30
 */

namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PostTagController extends AbstractActionController {

    public function indexAction(){
        return new ViewModel();
    }

}