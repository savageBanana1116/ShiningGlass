<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Artists Controller
 *
 * @property \App\Model\Table\ArtistsTable $Artists
 * @method \App\Model\Entity\Artist[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArtistsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $artists = $this->paginate($this->Artists);

        $this->set(compact('artists'));
    }

    /**
     * View method
     *
     * @param string|null $id Artist id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $artist = $this->Artists->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('artist'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $artist = $this->Artists->newEmptyEntity();
        if ($this->request->is('post')) {
            $artist = $this->Artists->patchEntity($artist, $this->request->getData());

           /* if(!$artist->getErrors){
                $image = $this -> request -> getData('image_file');

                $name = $image->getClientFilename();

                if(!is_dir(WWW_ROOT.'img'.DS.'artist-img'))
                    mkdir(WWW_ROOT.'img'.DS.'artist-img',0775);


                $targetPath = WWW_ROOT.'img'.DS.'artist-img'.DS.$name;

                if($name)
                    $image->moveTo($targetPath);

                $artist->image = 'artist-img/'.$name;
            }*/
            if(!$artist->getErrors) {
                $image = $this->request->getData('image_file');

                $name = $image->getClientFilename();

                if (!is_dir(WWW_ROOT . 'img' . DS . 'artist-img'))
                    mkdir(WWW_ROOT . 'img' . DS . 'artist-img', 0775);

                $targetPath = WWW_ROOT . 'img' . DS . 'artist-img' . DS . $name;

                if ($name)
                    $image->moveTo($targetPath);

                $artist->image = 'artist-img/' . $name;
            }


            if ($this->Artists->save($artist)) {
                $this->Flash->success(__('The artist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artist could not be saved. Please, try again.'));
        }
        $this->set(compact('artist'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Artist id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $artist = $this->Artists->get($id, [
            'contain' => [],
        ]);

        $currentImageName = $artist->image;

        if ($this->request->is(['patch', 'post', 'put'])) {
            $artist = $this->Artists->patchEntity($artist, $this->request->getData());

            $imgName = $this->request->getData('image_file')->getClientFilename();

            if (!empty($imgName)) {
                // do a file upload ONLY if the user picked an image during edit

                //upload image code------------------------------

                if (!$artist->getErrors) {
                    $image = $this->request->getData('image_file');

                    $name = $image->getClientFilename();

                    $targetPath = WWW_ROOT . 'img' . DS . 'artist-img' . DS . $name;

                    if ($name)
                        $image->moveTo($targetPath);

                    $artist->image = 'artist-img/' . $name;
                }
                //end upload image code----------------------------
            } else {
                // assign the already existing image name
                $artist->image = $currentImageName;
            }

            if ($this->Artists->save($artist)) {
                $this->Flash->success(__('The artist has been saved.'));

                return $this->redirect(['controller' => 'abouts', 'action' => 'index']);
            }
            $this->Flash->error(__('The artist could not be saved. Please, try again.'));
        }
        $this->set(compact('artist'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Artist id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artist = $this->Artists->get($id);
        if ($this->Artists->delete($artist)) {
            $this->Flash->success(__('The artist has been deleted.'));
        } else {
            $this->Flash->error(__('The artist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function getArtistName($id){
        $Artist1 = $this->Artists->get($id, [
            'contain' => [],
        ]);
        return $Artist1;
    }
}
