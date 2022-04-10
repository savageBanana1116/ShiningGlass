<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
class GalleryController extends AppController{
    public function index()
    {
        $artworks = TableRegistry::get('artworks');
        $query = $artworks->find();
        $this->set('results',$query);
    }

}
