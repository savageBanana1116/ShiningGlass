<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artwork $artwork
 * @var string[]|\Cake\Collection\CollectionInterface $orders
 * @var string[]|\Cake\Collection\CollectionInterface $categories
 */
?>

<?= $this->Html->css('styles.css') ?>
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
                                ['confirm' => __('Are you sure you want to delete {0}?', $artwork->name),
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
            <?= $this->Form->create($artwork, ['enctype' => 'multipart/form-data']) ?>
            <fieldset>
                <legend><?= __('Edit Artwork') ?></legend>
                <?php
                echo '<div class="form-row">';
                echo '<div class="form-group col-md-3">';
                echo $this->Form->control('name', ['type' => 'text', 'class' => 'form-control', 'maxlength' => '30']);
                echo '</div>';
                echo '<div class="form-group col-md-3">';
                echo $this->Form->control('price', ['type' => 'number', 'min' => '1', 'max' => '99999', 'class' => 'form-control', 'maxlength' => '5']);
                echo '</div>';
                echo '<div class="form-group col-md-3">';
                echo $this->Form->control('weight', ['type' => 'number', 'min' => '1', 'max' => '99999', 'class' => 'form-control' , 'maxlength' => '5']);
                echo '</div>';
                echo '<div class="form-group col-md-3">';
                echo $this->Form->control('size', ['type' => 'number', 'min' => '1', 'max' => '99999', 'class' => 'form-control']);
                echo '</div>';
                echo '</div>';
                echo $this->Form->control('descriptions', ['type' => 'textarea', 'class' => 'form-control', 'maxlength' => '255']);
                echo '<div class="form-row">';
                echo '<div class="form-group col-md-3">';
                echo $this->Form->control('image_file', ['type' => 'file', 'accept'=>'image/*',  'class' => 'form-control']);
                echo '</div>';
                echo '<div class="form-group col-md-3">';
                echo $this->Form->control('image_file2',['type' => 'file', 'accept'=>'image/*',  'class' => 'form-control']);
                echo '</div>';
                echo '<div class="form-group col-md-3">';
                echo $this->Form->control('image_file3',['type' => 'file', 'accept'=>'image/*',  'class' => 'form-control']);
                echo '</div>';
                echo '<div class="form-group col-md-3">';
                echo $this->Form->control('image_file4',['type' => 'file', 'accept'=>'image/*',  'class' => 'form-control']);
                echo '</div>';
                echo '<div class="form-group col-md-3">';
                echo $this->Form->control('image_file5',['type' => 'file', 'accept'=>'image/*',  'class' => 'form-control']);
                echo '</div>';
                echo '</div>';

                ?>
            </fieldset>
            <br>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success', 'style' => 'float:right;'] ) ?>
            <br>
            <?= $this->Form->end() ?>
        </div>
    </div>
    <br>
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</div>
