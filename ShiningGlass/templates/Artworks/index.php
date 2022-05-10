<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artwork[]|\Cake\Collection\CollectionInterface $artworks
 */
?>
<style>
    img {
        width: 100%;
        height: 100%;
        max-width: 150px;
        max-height: 150px;
        padding: 5px;
    }

    .grid-container {
        display: grid;
        column-gap: 10px;
    }
</style>

<?= $this->Html->css('styles.css') ?>
<?= $this->Html->css('cake.css') ?>

<div class="artworks-index-content">
    <aside class="column">
        <div class="side-nav">
            <h3><?= __('Artworks') ?></h3>
            <nav class="nav justify-content-center nav-pills nav-fill" style="padding: 5px">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item" style="padding: 5px">
                        <a>
                            <?= $this->Html->link(__('New Artwork'), ['action' => 'add'], ['class' => 'nav-item nav-link active btn btn-primary']) ?>
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
            <th><?= $this->Paginator->sort('price') ?></th>
            <th><?= $this->Paginator->sort('weight') ?></th>
            <th><?= $this->Paginator->sort('size') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
            <th><?= $this->Paginator->sort('create_date') ?></th>
            <th><?= $this->Paginator->sort('image') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($artworks as $artwork): ?>
            <tr>
                <td><?= h($artwork->name) ?></td>
                <td><?= h($artwork->price) ?></td>
                <td><?= h($artwork->weight) ?></td>
                <td><?= h($artwork->size) ?></td>
                <td><?= h($artwork->descriptions) ?></td>
                <td><?= h($artwork->create_date) ?></td>
                <td><?= $this->Html->image($artwork->image,
                        ['class' => 'image', 'style' => 'max-width:300px; max-height:300px;']) ?>
                </td>


                <td class="actions">
                    <?= $this->Html->link(__('View'),
                        ['action' => 'view', $artwork->id]) ?>
                    <?= $this->Html->link(__('Edit'),
                        ['action' => 'edit', $artwork->id]) ?>
                    <?= $this->Form->postLink(__('Delete'),
                        ['action' => 'delete', $artwork->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $artwork->id)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <div class="paginator" style="justify-content: center">
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
