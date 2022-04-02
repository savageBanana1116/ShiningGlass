<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artwork $artwork
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Artwork'), ['action' => 'edit', $artwork->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Artwork'), ['action' => 'delete', $artwork->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artwork->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Artworks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Artwork'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artworks view content">
            <h3><?= h($artwork->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Size') ?></th>
                    <td><?= h($artwork->size) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descriptions') ?></th>
                    <td><?= h($artwork->descriptions) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $artwork->has('order') ? $this->Html->link($artwork->order->id, ['controller' => 'Orders', 'action' => 'view', $artwork->order->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($artwork->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sku') ?></th>
                    <td><?= $this->Number->format($artwork->sku) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($artwork->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Weight') ?></th>
                    <td><?= $this->Number->format($artwork->weight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Create Date') ?></th>
                    <td><?= h($artwork->create_date) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Categories') ?></h4>
                <?php if (!empty($artwork->categories)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Create Date') ?></th>
                            <th><?= __('Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($artwork->categories as $categories) : ?>
                        <tr>
                            <td><?= h($categories->name) ?></td>
                            <td><?= h($categories->description) ?></td>
                            <td><?= h($categories->create_date) ?></td>
                            <td><?= h($categories->id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $categories->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $categories->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $categories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categories->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Artwork Images') ?></h4>
                <?php if (!empty($artwork->artwork_images)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('File Name') ?></th>
                            <th><?= __('Artwork Id') ?></th>
                            <th><?= __('Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($artwork->artwork_images as $artworkImages) : ?>
                        <tr>
                            <td><?= h($artworkImages->file_name) ?></td>
                            <td><?= h($artworkImages->artwork_id) ?></td>
                            <td><?= h($artworkImages->id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ArtworkImages', 'action' => 'view', $artworkImages->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ArtworkImages', 'action' => 'edit', $artworkImages->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ArtworkImages', 'action' => 'delete', $artworkImages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artworkImages->id)]) ?>
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
