<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArtworkImage $artworkImage
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Artwork Image'), ['action' => 'edit', $artworkImage->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Artwork Image'), ['action' => 'delete', $artworkImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artworkImage->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Artwork Images'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Artwork Image'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artworkImages view content">
            <h3><?= h($artworkImage->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('File Name') ?></th>
                    <td><?= h($artworkImage->file_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Artwork') ?></th>
                    <td><?= $artworkImage->has('artwork') ? $this->Html->link($artworkImage->artwork->id, ['controller' => 'Artworks', 'action' => 'view', $artworkImage->artwork->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($artworkImage->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
