<?php
namespace App\Controller;

class AdminPortalController extends AppController{
    public function index()
    {
        $this->viewBuilder()->setLayout('ajax');
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions([]);
    }
}
