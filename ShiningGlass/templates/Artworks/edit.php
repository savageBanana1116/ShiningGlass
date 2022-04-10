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
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $artwork->id],
                ['confirm' => __('Are you sure you want to delete item id {0} & name {1}?', $artwork->id,$artwork->name), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Artworks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artworks form content">
            <?= $this->Form->create($artwork) ?>
            <fieldset>
                <legend><?= __('Edit Artwork') ?></legend>
                <?php//
                    echo $this->Form->control('name');
                    echo $this->Form->control('price');
                    echo $this->Form->control('weight');
                    echo $this->Form->control('size');
                    echo $this->Form->control('descriptions');
                    echo $this->Form->control('create_date');
                    echo $this->Form->control('order_id', ['options' => $orders, 'empty' => true]);
                    echo $this->Form->control('image');
                    echo $this->Form->control('categories._ids', ['options' => $categories]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
