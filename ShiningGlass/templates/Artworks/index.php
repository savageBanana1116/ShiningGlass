<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artwork[]|\Cake\Collection\CollectionInterface $artworks
 */
?>
<style>
    img {
        width: 100%;
        height: 100%;
        padding: 10px;
    }
    .grid-container {
        display: grid;
        column-gap: 50px;
    }
    
    .grid-item{
        margin-top:10px;
        margin-bottom:10px;
    }
</style>
        <h2 class="heading"><?= __('Actions') ?></h2>
        <?= $this->Html->link(__('Add New Artwork'), ['action' => 'add'], ['class' => 'button float-right']) ?>
<div class="grid-container">
            <?php foreach ($artworks as $artwork): ?>


                <div class="grid-item"><?= $this->Html->image($artwork->image, ['class' => 'image', 'margin-top' => '100px', 'width' => '400px', 'height' => '250px']) ?><br><?= $this->Html->link(__($artwork->name), ['action' => 'view', $artwork->id,]) ?></div>
            <?php endforeach; ?>
        </div>
       
    </div>
