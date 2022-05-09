<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artwork $artwork
 * @var string[]|\Cake\Collection\CollectionInterface $orders
 * @var string[]|\Cake\Collection\CollectionInterface $categories
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
                            <?= $this->Form->postLink(__('Delete'),
                                ['action' => 'delete', $artwork->id],
                                ['confirm' => __('Are you sure you want to delete # {0}?', $artwork->id),
                                    'class' => 'nav-item nav-link active btn-danger']
                            ) ?>
                        </a>
                    </li>
                    <li class="nav-item" style="padding: 5px">
                        <a>
                            <?= $this->Html->link(__('List Artwork'),
                                ['action' => 'index'],
                                ['class' => 'nav-item nav-link active']) ?>
                        </a>
                    </li>
            </nav>
        </div>
    </aside>
    <div class="column-responsive column-80" align="left">
        <div class="artworks form content">
            <?= $this->Form->create($artwork) ?>
            <fieldset>
                <legend><?= __('Edit Artwork') ?></legend>
                <?php
                    echo $this->Form->control('name', ['type' => 'text', 'class' => 'form-control']) ;
                    echo $this->Form->control('price', ['type' => 'text', 'class' => 'form-control']);
                    echo $this->Form->control('weight', ['type' => 'text', 'class' => 'form-control']);
                    echo $this->Form->control('size',['type' => 'text', 'class' => 'form-control']);
                    echo $this->Form->control('descriptions', ['type' => 'textarea', 'class' => 'form-control']);
                    echo $this->Form->control('create_date', ['class' => 'form-control']);
                    // echo $this->Form->control('order_id', ['options' => $orders, 'empty' => true]);
                    echo $this->Form->control('image_file',['type'=>'file', 'class' => 'form-control']);
                    echo $this->Form->control('categories._ids', ['options' => $categories, 'type' => 'select', 'class' => 'form-control']);
                ?>
            </fieldset>
            <br>
            <?= $this->Form->button(__('Submit', ['class' => 'btn btn-primary', 'float' => 'right'])) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    <br>
    </div>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</div>
