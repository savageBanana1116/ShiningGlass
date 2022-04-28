<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artwork $artwork
 * @var string[]|\Cake\Collection\CollectionInterface $orders
 * @var string[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h2 class="heading"><?= __('Actions') ?></h2>
            <?= $this->Form->button(
                __('Delete Artwork'),
                ['action' => 'delete', $artwork->id],
                ['confirm' => __('Are you sure you want to delete {0}?', $artwork->name), 'class' => 'side-nav-item']
            ) ?>
            <br>
            <br>
            <?= $this->Html->link(__('Back to Artworks List View'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80" align="left">
        <div class="artworks form content">
            <?= $this->Form->create($artwork) ?>
            <fieldset>
                <legend><?= __('Edit Artwork') ?></legend>
                <?php
                    echo $this->Form->control('name', ['type' => 'text', 'class' => 'form-control']) ;
                    echo $this->Form->control('price', ['type' => 'text', 'class' => 'form-control']);
                    echo $this->Form->control('weight', ['type' => 'text', 'class' => 'form-control']);
                    echo $this->Form->control('size',['type' => 'text', 'class' => 'form-control']);
                    echo $this->Form->control('descriptions', ['type' => 'textarea', 'class' => 'form-control']);
                    echo $this->Form->control('create_date', ['class' => 'form-control']);
                    // echo $this->Form->control('order_id', ['options' => $orders, 'empty' => true]);
                    echo $this->Form->control('image_file',['type'=>'file', 'class' => 'form-control']);
                    echo $this->Form->control('categories._ids', ['options' => $categories, 'type' => 'select', 'class' => 'form-control']);
                ?>
            </fieldset>
            <br>
            <?= $this->Form->button(__('Submit', ['class' => 'btn btn-primary', 'float' => 'right'])) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    <br>
    </div>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</div>
