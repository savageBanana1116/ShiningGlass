<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artwork $artwork
 */
?>

<?= $this->Html->css('styles.css') ?>
<?= $this->element('nav') ?>
<?= $this->Html->css('cake.css') ?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <nav class="nav justify-content-center nav-pills nav-fill" style="padding: 5px">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item" style="padding: 5px">
                        <a>
                            <?= $this->Html->link(__('Edit Artwork'),
                                ['action' => 'edit', $artwork->id],
                                ['class' => 'nav-item nav-link active']) ?>
                        </a>
                    </li>
                    <li class="nav-item" style="padding: 5px">
                        <a>
                            <?= $this->Form->postLink(__('Delete Artwork'),
                                ['action' => 'delete', $artwork->id],
                                ['confirm' => __('Are you sure you want to delete  {0}?', $artwork->name),
                                    'class' => 'nav-item nav-link active btn-danger']) ?>
                        </a>
                    </li>
                    <li class="nav-item" style="padding: 5px">
                        <a>
                            <?= $this->Html->link(__('List Artworks'),
                                ['action' => 'index'],
                                ['class' => 'nav-item nav-link active']) ?>
                        </a>
                    </li>
                    <li class="nav-item" style="padding: 5px">
                        <a>
                            <?= $this->Html->link(__('New Artwork'),
                                ['action' => 'add'],
                                ['class' => 'nav-item nav-link active']) ?>
                        </a>
                    </li>
            </nav>
        </div>
    </aside>

    <div id="artworkInfo" class="table-responsive" style="padding-top:10px;">
        <div class="artworkInfo view content">
            <h3><?= h($artwork->name) ?></h3>
            <table class="table table-bordered">
                <tr>
                    <th><?= __('Name: ') ?></th>
                    <td><?= h($artwork->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price: $') ?></th>
                    <td><?= $this->Number->format($artwork->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Weight: ') //   ?></th>
                    <td><?= $this->Number->format($artwork->weight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Size: ') ?></th>
                    <td><?= h($artwork->size) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description: ') ?></th>
                    <td><?= h($artwork->descriptions) ?></td>
                </tr>
                <tr>
                    <th><?= __('Create Date: ') ?></th>
                    <td><?= h($artwork->create_date) ?></td>
                </tr>
            </table>
        </div>
    </div>

    <div id="artworkImages" class="table-responsive" style="padding-top:10px;">
        <div class="artworkImages view content">
            <h3>Artwork Images</h3>
            <table class="table table-bordered">
                <tr>
                    <td><?= $this->Html->image($artwork->image,
                            ['style' => 'max-height: 150px; max-width: 150px']) ?>
                    </td>
                    <td>
                        <?= $this->Html->image($artwork->image2,
                            ['style' => 'max-height: 150px; max-width: 150px']) ?>
                    </td>
                    <td>
                        <?= $this->Html->image($artwork->image3,
                            ['style' => 'max-height: 150px; max-width: 150px']) ?>
                    </td>
                    <td>
                        <?= $this->Html->image($artwork->image4,
                            ['style' => 'max-height: 150px; max-width: 150px']) ?>
                    </td>
                    <td>
                        <?= $this->Html->image($artwork->image5,
                            ['style' => 'max-height: 150px; max-width: 150px']) ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>


    <?php if (!empty($artwork->categories)) : ?>
        <div class="related"">
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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">




