<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<div class="categories index content">

    <?= $this->Html->css('styles.css') ?>

    <?= $this->Html->css('cake.css') ?>

    <aside class="column">
        <div class="side-nav">
            <h3><?= __('Collections') ?></h3>
            <nav class="nav justify-content-center nav-pills nav-fill" style="padding: 5px">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item" style="padding: 5px">
                        <a>
                            <?= $this->Html->link(__('New Collection'), ['action' => 'add'], ['class' => 'nav-item nav-link active btn btn-primary']) ?>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="table-responsive" style="padding-top: 10px;">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th class="actions"><?= __('Description') ?></th>
                <th><?= $this->Paginator->sort('create_date') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?= h($category->name) ?></td>
                    <td><?= h($category->description) ?></td>
                    <td><?= h($category->create_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'),
                            ['action' => 'view', $category->id]) ?>
                        <?= $this->Html->link(__('Edit'),
                            ['action' => 'edit', $category->id]) ?>
                        <?= $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $category->id],
                            ['confirm' => __('Are you sure you want to delete {0}?', $category->name)]) ?>
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


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

