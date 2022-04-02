<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CategoryImages Controller
 *
 * @property \App\Model\Table\CategoryImagesTable $CategoryImages
 * @method \App\Model\Entity\CategoryImage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoryImagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories'],
        ];
        $categoryImages = $this->paginate($this->CategoryImages);

        $this->set(compact('categoryImages'));
    }

    /**
     * View method
     *
     * @param string|null $id Category Image id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoryImage = $this->CategoryImages->get($id, [
            'contain' => ['Categories'],
        ]);

        $this->set(compact('categoryImage'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoryImage = $this->CategoryImages->newEmptyEntity();
        if ($this->request->is('post')) {
            $categoryImage = $this->CategoryImages->patchEntity($categoryImage, $this->request->getData());
            if ($this->CategoryImages->save($categoryImage)) {
                $this->Flash->success(__('The category image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category image could not be saved. Please, try again.'));
        }
        $categories = $this->CategoryImages->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('categoryImage', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Category Image id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoryImage = $this->CategoryImages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoryImage = $this->CategoryImages->patchEntity($categoryImage, $this->request->getData());
            if ($this->CategoryImages->save($categoryImage)) {
                $this->Flash->success(__('The category image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category image could not be saved. Please, try again.'));
        }
        $categories = $this->CategoryImages->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('categoryImage', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Category Image id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoryImage = $this->CategoryImages->get($id);
        if ($this->CategoryImages->delete($categoryImage)) {
            $this->Flash->success(__('The category image has been deleted.'));
        } else {
            $this->Flash->error(__('The category image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
