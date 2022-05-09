<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About[]|\Cake\Collection\CollectionInterface $abouts
 * @var \App\Model\Entity\About[]|\Cake\Collection\CollectionInterface $artists
 */
?>
<div class="abouts index content">
    <h3><?= __('Content Management - About Page') ?></h3>
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
    <div class="table-responsive">
        <table>
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
                    <td><?= $this->Number->format($about->id) ?></td>
                    <td><?= h($about->title) ?></td>
                    <td><?= h($about->text) ?></td>
                    <td class="actions">
                        <!--// $this->Html->link(__('View'), ['action' => 'view', $about->id]) -->
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $about->id]) ?>
                        <!--// $this->Form->postLink(__('Delete'), ['action' => 'delete', $about->id], ['confirm' => __('Are you sure you want to delete # {0}?', $about->id)])-->
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
