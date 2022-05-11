<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About[]|\Cake\Collection\CollectionInterface $abouts
 * @var \App\Model\Entity\About[]|\Cake\Collection\CollectionInterface $artists
 */
?>

<?= $this->Html->css('styles.css') ?>

<?= $this->Html->css('cake.css') ?>

<div class="abouts index content">
    <h3><?= __('Content Management - About Page') ?></h3>
    <div class="table-responsive" style="padding-top: 10px;">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('image') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($artists as $artist): ?>
                <tr>
                    <td><?= h($artist->name) ?></td>
                    <td><img src="webroot/img/<?= h($artist->image) ?>" width="50" height="50"></td>
                    <td class="actions" >
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Artists', 'action' => 'edit', $artist->id]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('text') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($abouts as $about): ?>
                <tr>
                    <td><?= h($about->title) ?></td>
                    <td><?= h($about->text) ?></td>
                    <td class="actions"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $about->id]) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

