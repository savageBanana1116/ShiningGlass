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
        $this->paginate = [
            'contain' => ['Orders'],
        ];
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
            $this->Flash->success(__('The artwork has been deleted.'));
        } else {
            $this->Flash->error(__('The artwork could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
