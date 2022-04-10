<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;

class LandingController extends AppController{
    public function home()
    {
        $this->viewBuilder()->setLayout('ajax');
        $artworks = TableRegistry::get('artworks');
        $query = $artworks->find();
        $this->set('results',$query);
    }

}
