<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artwork $artwork
 */
?>
<style>
    img{
       float: left;
       width: 500px;
        height: 500px;
    }
    .artworkscontainer{
        font-size: 30px;
    }

</style>

    <div class="artworkscontainer">
<?= $this->Html->image($artwork->image, ['class' => 'image']) ?>
                    <?=__('Name: ') ?>
                    <?= h($artwork->name)?>

                    <br>
                    <?= __('Size: ') ?>
                    <?= h($artwork->size) ?>
                    <br>
                    <?= __('Description: ') ?>
                    <?= h($artwork->descriptions) ?>
                <br>
                   <?= __('Price: $') ?>
                    <?= $this->Number->format($artwork->price) ?>
                <br>
                    <?= __('Weight: ') ?>
                    <?= $this->Number->format($artwork->weight) ?>
                <br>


        <p>For enquiries about this item please contact us at Lisa@shiningglass.com.au </p>
    </div>
    <?php if (!empty($artwork->categories)) : ?>
            <div class="related">
                <h4><?= __('Related Categories') ?></h4>

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
                <?php if (!empty($artwork->artwork_images)) : ?>
                <h4><?= __('Related Artwork Images') ?></h4>

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
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ArtworkImages', 'action' => 'delete', $artworkImages->id], ['confirm' => __('Are you sure you want to delete item id {0} & name {1}?', $artworkImages->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>

    <div class="related">
        <div class="related">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Artwork'), ['action' => 'edit', $artwork->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Artwork'), ['action' => 'delete', $artwork->id], ['confirm' => __('Are you sure you want to delete artwork id {0} & name {1}?', $artwork->id,$artwork->name), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Artworks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Artwork'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </div>

