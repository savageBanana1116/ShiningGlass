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
            if (!$artwork->getErrors) {

//                $fileobject = $this->request->getData('image_file');
//                $destination = 'img/artwork-img/' . $fileobject->getClientFilename();
//
//// Existing files with the same name will be replaced.
//                $fileobject->moveTo($destination);
//                $artwork->image = 'artwork-img/' . $fileobject->getClientFileName();
//
//                //Image 2
//
//                $fileobject = $this->request->getData('image_file2');
//                $destination = 'img/artwork-img/' . $fileobject->getClientFilename();
//
//// Existing files with the same name will be replaced.
//                $fileobject->moveTo($destination);
//                $artwork->image2 = 'artwork-img/' . $fileobject->getClientFileName();
//
//                // Image 3
//
//                $fileobject = $this->request->getData('image_file3');
//                $destination = 'img/artwork-img/' . $fileobject->getClientFilename();
//
//// Existing files with the same name will be replaced.
//                $fileobject->moveTo($destination);
//                $artwork->image3 = 'artwork-img/' . $fileobject->getClientFileName();
//
//                // Image 4
//                $fileobject = $this->request->getData('image_file4');
//                $destination = 'img/artwork-img/' . $fileobject->getClientFilename();
//
//// Existing files with the same name will be replaced.
//                $fileobject->moveTo($destination);
//                $artwork->image4 = 'artwork-img/' . $fileobject->getClientFileName();
//
//                // Image 5
//                $fileobject = $this->request->getData('image_file5');
//                $destination = 'img/artwork-img/' . $fileobject->getClientFilename();
//
//// Existing files with the same name will be replaced.
//                $fileobject->moveTo($destination);
//                $artwork->image5 = 'artwork-img/' . $fileobject->getClientFileName();

                $image = $this->request->getData('image_file');

                $name = $image->getClientFilename();

                if (!is_dir(WWW_ROOT . 'img' . DS . 'artwork-img'))
                    mkdir(WWW_ROOT . 'img' . DS . 'artwork-img', 0775);

                $targetPath = WWW_ROOT . 'img' . DS . 'artwork-img' . DS . $name;

                if ($name)
                    $image->moveTo($targetPath);

                $artwork->image = 'artwork-img/' . $name;


                $image2 = $this->request->getData('image_file2');
                $name2 = $image2->getClientFilename();
                if (!is_dir(WWW_ROOT . 'img' . DS . 'artwork-img'))
                    mkdir(WWW_ROOT . 'img' . DS . 'artwork-img', 0775);
                $targetPath2 = WWW_ROOT . 'img' . DS . 'artwork-img' . DS . $name2;
                if ($name2)
                    $image2->moveTo($targetPath2);
                $artwork->image2 = 'artwork-img/' . $name2;


                $image3 = $this->request->getData('image_file3');
                $name3 = $image3->getClientFilename();
                if (!is_dir(WWW_ROOT . 'img' . DS . 'artwork-img'))
                    mkdir(WWW_ROOT . 'img' . DS . 'artwork-img', 0775);
                $targetPath3 = WWW_ROOT . 'img' . DS . 'artwork-img' . DS . $name3;
                if ($name3)
                    $image3->moveTo($targetPath3);
                $artwork->image3 = 'artwork-img/' . $name3;


                $image4 = $this->request->getData('image_file4');
                $name4 = $image4->getClientFilename();
                if (!is_dir(WWW_ROOT . 'img' . DS . 'artwork-img'))
                    mkdir(WWW_ROOT . 'img' . DS . 'artwork-img', 0775);
                $targetPath4 = WWW_ROOT . 'img' . DS . 'artwork-img' . DS . $name4;
                if ($name4)
                    $image4->moveTo($targetPath4);
                $artwork->image4 = 'artwork-img/' . $name4;

                $image5 = $this->request->getData('image_file5');
                $name5 = $image5->getClientFilename();
                if (!is_dir(WWW_ROOT . 'img' . DS . 'artwork-img'))
                    mkdir(WWW_ROOT . 'img' . DS . 'artwork-img', 0775);
                $targetPath5 = WWW_ROOT . 'img' . DS . 'artwork-img' . DS . $name5;
                if ($name5)
                    $image5->moveTo($targetPath5);
                $artwork->image5 = 'artwork-img/' . $name5;


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

        $currentImageName = $artwork->image;

        if ($this->request->is(['patch', 'post', 'put'])) {
            $artwork = $this->Artworks->patchEntity($artwork, $this->request->getData());

            $imgName = $this->request->getData('image_file')->getClientFilename();

            if (!empty($imgName)) {
                // do a file upload ONLY if the user picked an image during edit

                //upload image code------------------------------

                if (!$artwork->getErrors) {
                    $image = $this->request->getData('image_file');

                    $name = $image->getClientFilename();

                    $targetPath = WWW_ROOT . 'img' . DS . 'artwork-img' . DS . $name;

                    if ($name)
                        $image->moveTo($targetPath);

                    $artwork->image = 'artwork-img/' . $name;
                }
                //end upload image code----------------------------
            } else {
                // assign the already existing image name
                $artwork->image = $currentImageName;
            }
// image 2
            $currentImageName2 = $artwork->image2;
            $imgName2 = $this->request->getData('image_file2')->getClientFilename();

            if (!empty($imgName2)) {
                // do a file upload ONLY if the user picked an image during edit

                //upload image code------------------------------

                if (!$artwork->getErrors) {
                    $image2 = $this->request->getData('image_file2');

                    $name = $image2->getClientFilename();

                    $targetPath = WWW_ROOT . 'img/artwork-img/' . DS . $name;

                    if ($name)
                        $image2->moveTo($targetPath);

                    $artwork->image2 = 'artwork-img/' . $name;
                }
                //end upload image code----------------------------
            } else {
                // assign the already existing image name
                $artwork->image2 = $currentImageName2;
            }
// Image 3
            $currentImageName3 = $artwork->image3;
            $imgName3 = $this->request->getData('image_file3')->getClientFilename();

            if (!empty($imgName3)) {
                // do a file upload ONLY if the user picked an image during edit

                //upload image code------------------------------

                if (!$artwork->getErrors) {
                    $image3 = $this->request->getData('image_file3');

                    $name = $image3->getClientFilename();

                    $targetPath = WWW_ROOT . 'img/artwork-img/' . DS . $name;

                    if ($name)
                        $image3->moveTo($targetPath);

                    $artwork->image3 = 'artwork-img/' . $name;
                }
                //end upload image code----------------------------
            } else {
                // assign the already existing image name
                $artwork->image3 = $currentImageName3;
            }

            // Image 4
            $currentImageName4 = $artwork->image4;
            $imgName4 = $this->request->getData('image_file4')->getClientFilename();

            if (!empty($imgName4)) {
                // do a file upload ONLY if the user picked an image during edit

                //upload image code------------------------------

                if (!$artwork->getErrors) {
                    $image4 = $this->request->getData('image_file4');

                    $name = $image4->getClientFilename();

                    $targetPath = WWW_ROOT . 'img/artwork-img/' . DS . $name;

                    if ($name)
                        $image4->moveTo($targetPath);

                    $artwork->image4 = 'artwork-img/' . $name;
                }
                //end upload image code----------------------------
            } else {
                // assign the already existing image name
                $artwork->image4 = $currentImageName4;
            }

// Image 5
            $currentImageName5 = $artwork->image5;
            $imgName5 = $this->request->getData('image_file5')->getClientFilename();

            if (!empty($imgName5)) {
                // do a file upload ONLY if the user picked an image during edit

                //upload image code------------------------------

                if (!$artwork->getErrors) {
                    $image5 = $this->request->getData('image_file5');

                    $name = $image5->getClientFilename();

                    $targetPath = WWW_ROOT . 'img/artwork-img/' . DS . $name;

                    if ($name)
                        $image5->moveTo($targetPath);

                    $artwork->image5 = 'artwork-img/' . $name;
                }
                //end upload image code----------------------------
            } else {
                // assign the already existing image name
                $artwork->image5 = $currentImageName5;
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
