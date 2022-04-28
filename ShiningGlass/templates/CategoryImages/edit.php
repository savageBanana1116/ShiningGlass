<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoryImage $categoryImage
 * @var string[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categoryImage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $categoryImage->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Category Images'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoryImages form content">
            <?= $this->Form->create($categoryImage) ?>
            <fieldset>
                <legend><?= __('Edit Category Image') ?></legend>
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
