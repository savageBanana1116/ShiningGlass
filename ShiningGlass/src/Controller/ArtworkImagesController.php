<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ArtworkImages Controller
 *
 * @property \App\Model\Table\ArtworkImagesTable $ArtworkImages
 * @method \App\Model\Entity\ArtworkImage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArtworkImagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Artworks'],
        ];
        $artworkImages = $this->paginate($this->ArtworkImages);

        $this->set(compact('artworkImages'));
    }

    /**
     * View method
     *
     * @param string|null $id Artwork Image id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $artworkImage = $this->ArtworkImages->get($id, [
            'contain' => ['Artworks'],
        ]);

        $this->set(compact('artworkImage'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $artworkImage = $this->ArtworkImages->newEmptyEntity();
        if ($this->request->is('post')) {
            $artworkImage = $this->ArtworkImages->patchEntity($artworkImage, $this->request->getData());
            if ($this->ArtworkImages->save($artworkImage)) {
                $this->Flash->success(__('The artwork image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artwork image could not be saved. Please, try again.'));
        }
        $artworks = $this->ArtworkImages->Artworks->find('list', ['limit' => 200])->all();
        $this->set(compact('artworkImage', 'artworks'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Artwork Image id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $artworkImage = $this->ArtworkImages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artworkImage = $this->ArtworkImages->patchEntity($artworkImage, $this->request->getData());
            if ($this->ArtworkImages->save($artworkImage)) {
                $this->Flash->success(__('The artwork image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artwork image could not be saved. Please, try again.'));
        }
        $artworks = $this->ArtworkImages->Artworks->find('list', ['limit' => 200])->all();
        $this->set(compact('artworkImage', 'artworks'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Artwork Image id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artworkImage = $this->ArtworkImages->get($id);
        if ($this->ArtworkImages->delete($artworkImage)) {
            $this->Flash->success(__('The artwork image has been deleted.'));
        } else {
            $this->Flash->error(__('The artwork image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
