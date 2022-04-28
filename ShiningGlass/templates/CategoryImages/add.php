<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoryImage $categoryImage
 * @var \Cake\Collection\CollectionInterface|string[] $categories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Category Images'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoryImages form content">
            <?= $this->Form->create($categoryImage) ?>
            <fieldset>
                <legend><?= __('Add Category Image') ?></legend>
                <?php
                    echo $this->Form->control('file_name');
                    echo $this->Form->control('category_id', ['options' => $categories]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
