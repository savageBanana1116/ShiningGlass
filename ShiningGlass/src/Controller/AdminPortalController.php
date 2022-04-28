<?php
namespace App\Controller;

class AdminPortalController extends AppController{
    public function index()
    {
        $this->viewBuilder()->setLayout('ajax');
    }

}
