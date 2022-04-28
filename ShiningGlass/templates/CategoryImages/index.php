<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoryImage[]|\Cake\Collection\CollectionInterface $categoryImages
 */
?>
<div class="categoryImages index content">
    <?= $this->Html->link(__('New Category Image'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Category Images') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('file_name') ?></th>
                    <th><?= $this->Paginator->sort('category_id') ?></th>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categoryImages as $categoryImage): ?>
                <tr>
                    <td><?= h($categoryImage->file_name) ?></td>
                    <td><?= $categoryImage->has('category') ? $this->Html->link($categoryImage->category->name, ['controller' => 'Categories', 'action' => 'view', $categoryImage->category->id]) : '' ?></td>
                    <td><?= $this->Number->format($categoryImage->id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $categoryImage->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoryImage->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoryImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoryImage->id)]) ?>
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
