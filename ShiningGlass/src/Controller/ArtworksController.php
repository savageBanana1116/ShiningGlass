<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Artworks Controller
 *
 * @property \App\Model\Table\ArtworksTable $Artworks
 * @method \App\Model\Entity\Artwork[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArtworksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $artworks = $this->paginate($this->Artworks);

        $this->set(compact('artworks'));
    }

    /**
     * View method
     *
     * @param string|null $id Artwork id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $artwork = $this->Artworks->get($id, [
            'contain' => ['Orders', 'Categories', 'ArtworkImages'],
        ]);

        $this->set(compact('artwork'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $artwork = $this->Artworks->newEmptyEntity();
        if ($this->request->is('post')) {
            $artwork = $this->Artworks->patchEntity($artwork, $this->request->getData());
//            $imageFile = $this->request->getData('image');
//
//            debug($_FILES);
//            //$fileName = $imageFile->getClientFilename();
//            $tmp_name = $_FILES['image']['tmp_name'];
//            //debug($fileName);
//            //exit();
//            $fileDestination = "C:" . DIRECTORY_SEPARATOR . "xampp" . DIRECTORY_SEPARATOR . "htdocs" .
//                DIRECTORY_SEPARATOR . "team18-app_fit3047" . DIRECTORY_SEPARATOR .
//                "ShiningGlass" . DIRECTORY_SEPARATOR . "Uploads".DIRECTORY_SEPARATOR.$tmp_name;
//            //$fileDestination = 'Uploads'.DIRECTORY_SEPARATOR."123";
//
//            //$imageFile->moveTo($fileDestination);
//            move_uploaded_file($tmp_name,$fileDestination);
//
//            $artwork->image=$tmp_name;
            if(!$artwork->getErrors) {
                $image = $this->request->getData('image_file');

                $name = $image->getClientFilename();

                if (!is_dir(WWW_ROOT . 'img' . DS . 'artwork-img'))
                    mkdir(WWW_ROOT . 'img' . DS . 'artwork-img', 0775);

                $targetPath = WWW_ROOT . 'img' . DS . 'artwork-img' . DS . $name;

                if ($name)
                    $image->moveTo($targetPath);

                $artwork->image = 'artwork-img/' . $name;
            }

            if ($this->Artworks->save($artwork)) {
                $this->Flash->success(__('The artwork has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artwork could not be saved. Please, try again.'));
        }
        $orders = $this->Artworks->Orders->find('list', ['limit' => 200])->all();
        $categories = $this->Artworks->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('artwork', 'orders', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Artwork id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $artwork = $this->Artworks->get($id, [
            'contain' => ['Categories'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artwork = $this->Artworks->patchEntity($artwork, $this->request->getData());
            if ($this->Artworks->save($artwork)) {
                $this->Flash->success(__('The artwork has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artwork could not be saved. Please, try again.'));
        }
        $orders = $this->Artworks->Orders->find('list', ['limit' => 200])->all();
        $categories = $this->Artworks->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('artwork', 'orders', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Artwork id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artwork = $this->Artworks->get($id);
        if ($this->Artworks->delete($artwork)) {
            $this->Flash->success(__('{0} has been deleted', $artwork->name), ['style' => 'font-weight:bold;']);
        } else {
            $this->Flash->error(__('The artwork could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
