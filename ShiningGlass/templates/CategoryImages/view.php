<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoryImage $categoryImage
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Category Image'), ['action' => 'edit', $categoryImage->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Category Image'), ['action' => 'delete', $categoryImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoryImage->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Category Images'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Category Image'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoryImages view content">
            <h3><?= h($categoryImage->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('File Name') ?></th>
                    <td><?= h($categoryImage->file_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $categoryImage->has('category') ? $this->Html->link($categoryImage->category->name, ['controller' => 'Categories', 'action' => 'view', $categoryImage->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($categoryImage->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
