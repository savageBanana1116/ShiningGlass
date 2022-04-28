<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Locator\LocatorAwareTrait;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
     
class GalleryController extends AppController{
    public function index()
    {
        
        // $this->fetchTable('Articles')->find()->all();
        
        // $artworks = $this->paginate($this->Artworks);
        // $this->set(compact('artworks'));
        
        $artworks = $this->fetchTable('Artworks')->find('all')
    ->all();
        $this->set('results',$artworks);
    }

}
