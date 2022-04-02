<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArtworkImage[]|\Cake\Collection\CollectionInterface $artworkImages
 */
?>
<div class="artworkImages index content">
    <?= $this->Html->link(__('New Artwork Image'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Artwork Images') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('file_name') ?></th>
                    <th><?= $this->Paginator->sort('artwork_id') ?></th>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($artworkImages as $artworkImage): ?>
                <tr>
                    <td><?= h($artworkImage->file_name) ?></td>
                    <td><?= $artworkImage->has('artwork') ? $this->Html->link($artworkImage->artwork->id, ['controller' => 'Artworks', 'action' => 'view', $artworkImage->artwork->id]) : '' ?></td>
                    <td><?= $this->Number->format($artworkImage->id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $artworkImage->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artworkImage->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artworkImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artworkImage->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
