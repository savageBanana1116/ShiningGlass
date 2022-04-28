<?php
namespace App\Controller;

class BlogController extends AppController{
    public function index()
    {
        $this->viewBuilder()->setLayout('ajax');
    }

}
