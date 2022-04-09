<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artwork[]|\Cake\Collection\CollectionInterface $artworks
 */
?>
<div class="artworks index content">
    <?= $this->Html->link(__('New Artwork'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Artworks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th><?= $this->Paginator->sort('weight') ?></th>
                    <th><?= $this->Paginator->sort('size') ?></th>
                    <th><?= $this->Paginator->sort('descriptions') ?></th>
                    <th><?= $this->Paginator->sort('create_date') ?></th>
                    <th><?= $this->Paginator->sort('order_id') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($artworks as $artwork): ?>
                <tr>
                    <td><?= $this->Number->format($artwork->id) ?></td>
                    <td><?= $this->Number->format($artwork->price) ?></td>
                    <td><?= $this->Number->format($artwork->weight) ?></td>
                    <td><?= h($artwork->size) ?></td>
                    <td><?= h($artwork->descriptions) ?></td>
                    <td><?= h($artwork->create_date) ?></td>
                    <td><?= $artwork->has('order') ? $this->Html->link($artwork->order->id, ['controller' => 'Orders', 'action' => 'view', $artwork->order->id]) : '' ?></td>
                    <td><?= h($artwork->image) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $artwork->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artwork->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artwork->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artwork->id)]) ?>
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
