<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categories view content">
            <h3><?= h($category->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= $this->Number->format($category->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= $this->Number->format($category->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($category->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Create Date') ?></th>
                    <td><?= h($category->create_date) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Artworks') ?></h4>
                <?php if (!empty($category->artworks)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Sku') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Weight') ?></th>
                            <th><?= __('Size') ?></th>
                            <th><?= __('Descriptions') ?></th>
                            <th><?= __('Create Date') ?></th>
                            <th><?= __('Order Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($category->artworks as $artworks) : ?>
                        <tr>
                            <td><?= h($artworks->id) ?></td>
                            <td><?= h($artworks->sku) ?></td>
                            <td><?= h($artworks->price) ?></td>
                            <td><?= h($artworks->weight) ?></td>
                            <td><?= h($artworks->size) ?></td>
                            <td><?= h($artworks->descriptions) ?></td>
                            <td><?= h($artworks->create_date) ?></td>
                            <td><?= h($artworks->order_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Artworks', 'action' => 'view', $artworks->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Artworks', 'action' => 'edit', $artworks->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Artworks', 'action' => 'delete', $artworks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artworks->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Category Images') ?></h4>
                <?php if (!empty($category->category_images)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('File Name') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th><?= __('Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($category->category_images as $categoryImages) : ?>
                        <tr>
                            <td><?= h($categoryImages->file_name) ?></td>
                            <td><?= h($categoryImages->category_id) ?></td>
                            <td><?= h($categoryImages->id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CategoryImages', 'action' => 'view', $categoryImages->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CategoryImages', 'action' => 'edit', $categoryImages->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CategoryImages', 'action' => 'delete', $categoryImages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoryImages->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
