<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Locator\LocatorAwareTrait;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
/**
 * Gallery Controller
 *
 * @property \App\Model\Table\ArtworksTable $Artworks
 * @method \App\Model\Entity\Artwork[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */

class GalleryController extends AppController{
    public function index()
    {

        // $this->fetchTable('Articles')->find()->all();

        // $artworks = $this->paginate($this->Artworks);
        // $this->set(compact('artworks'));
        $category_id= $this->request->getQuery('category_id');
        if(!empty($searchTerm_id)){
            $Artworks = $this->fetchTable('Categories')->get($category_id,['contain'=>['Artworks']]);
            $this->set('results',$Artworks);

        }else{
            $query = $this->fetchTable('Artworks')->find();
            $Artworks = $this->paginate($query);
            $this->set('results',$Artworks);
        }


    }


}
