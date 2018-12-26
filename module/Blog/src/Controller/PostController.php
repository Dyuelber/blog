<?php
/**
 * Created by PhpStorm.
 * User: dyuelber1
 * Date: 26/12/18
 * Time: 15:26
 */

namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PostController extends AbstractActionController {

    public function indexAction(){
        return new ViewModel();
    }

}