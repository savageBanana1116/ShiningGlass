<?php
namespace App\Controller;

class BlogController extends AppController{
    public function index()
    {
        $this->viewBuilder()->setLayout('default');
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['index']);
    }

}
