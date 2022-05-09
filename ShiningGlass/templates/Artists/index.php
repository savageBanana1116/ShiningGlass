<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artist[]|\Cake\Collection\CollectionInterface $artists
 */
?>
<div class="artists index content">
    <h3><?= __('Artists') ?></h3>
    <div class="table-responsive">
        <table>
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
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artist->id]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
