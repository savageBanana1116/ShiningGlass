<?php
namespace App\Controller;

class GalleryController extends AppController{
    public function index()
    {
        $this->viewBuilder()->setLayout('ajax');
    }

}
