<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArtworkImage $artworkImage
 * @var string[]|\Cake\Collection\CollectionInterface $artworks
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $artworkImage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $artworkImage->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Artwork Images'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artworkImages form content">
            <?= $this->Form->create($artworkImage) ?>
            <fieldset>
                <legend><?= __('Edit Artwork Image') ?></legend>
                <?php
                    echo $this->Form->control('file_name');
                    echo $this->Form->control('artwork_id', ['options' => $artworks]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
