<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artwork $artwork
 * @var \Cake\Collection\CollectionInterface|string[] $orders
 * @var \Cake\Collection\CollectionInterface|string[] $categories
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
                            <?= $this->Html->link(__('List Artworks'),
                                ['action' => 'index'],
                                ['class' => 'nav-item nav-link active']) ?>
                        </a>
                    </li>
            </nav>
        </div>
    </aside>
    <div class="column-responsive column-80" align="left">
        <div class="artworks form content">
            <?= $this->Form->create($artwork, ['type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Add Artwork') ?></legend>
                <?php
                echo '<div class="form-row">';
                echo '<div class="form-group col-md-3">';
                echo $this->Form->control('name', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Enter Artwork Name', 'required' => 'required', 'maxlength' => '30']);
                echo '<span id="textHelpBlock" class="form-text text-muted">Max 30 characters</span>';
                echo '</div>';
                echo '<div class="form-group col-md-3">';
                echo $this->Form->control('price', ['type' => 'decimal', 'class' => 'form-control', 'placeholder' => 'Enter Price', 'maxlength' => '10', 'required' => 'required']);
                echo '<span id="textHelpBlock" class="form-text text-muted">Max 10 characters (Numbers only)</span>';
                echo '</div>';
                echo '<div class="form-group col-md-3">';
                echo $this->Form->control('weight', ['type' => 'decimal', 'class' => 'form-control', 'placeholder' => 'Enter Weight (Kg)', 'maxlength' => '5', 'required' => 'required']);
                echo '<span id="textHelpBlock" class="form-text text-muted">Max 5 characters (Numbers only)</span>';
                echo '</div>';
                echo '<div class="form-group col-md-3">';
                echo $this->Form->control('size', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Enter Size (W x H)', 'maxlength' => '5', 'required' => 'required']);
                echo '<span id="textHelpBlock" class="form-text text-muted">Max 5 characters (Numbers only)</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="form-row">';
                echo '<div class="form-group col-md-6">';
                echo $this->Form->control('descriptions', ['type' => 'textarea', 'class' => 'form-control', 'placeholder' => 'Enter a short description about the artwork.', 'maxlength' => '255', 'required' => 'required']);
                echo '<span id="textHelpBlock" class="form-text text-muted">Maximum 255 characters</span>';
                echo '</div>';
                echo '<div class="form-group col-md-6">';
                echo $this->Form->control('categories._ids', ['options' => $categories, 'class' => 'form-control']);
                echo '<span id="textHelpBlock" class="form-text text-muted">Select a category if relevant to the Artwork, if not leave unselected.</span>';
                echo '</div>';
                echo '</div>';
                echo $this->Form->control('create_date', ['class' => 'form-control', 'required' => 'required']);
                echo '<span id="textHelpBlock" class="form-text text-muted">Please select a date & time</span>';
                echo '<div class="form-row">';
                echo '<div class="form-group col-md-3">';
                echo $this->Form->control('image_file', ['type' => 'file', 'accept'=>'image/*',  'class' => 'form-control', 'required' => 'required']);
                echo '<span id="textHelpBlock" class="form-text text-muted">Upload the image of your artwork</span>';
                echo '</div>';
                echo '<div class="form-group col-md-3">';
                echo $this->Form->control('image_file2', ['type' => 'file', 'accept'=>'image/*',  'class' => 'form-control']);
                echo '<span id="textHelpBlock" class="form-text text-muted">Upload alternative angle of your artwork</span>';
                echo '</div>';
                echo '<div class="form-group col-md-3">';
                echo $this->Form->control('image_file3', ['type' => 'file', 'accept'=>'image/*',  'class' => 'form-control']);
                echo '<span id="textHelpBlock" class="form-text text-muted">Upload alternative angle of your artwork</span>';
                echo '</div>';
                echo '<div class="form-group col-md-3">';
                echo $this->Form->control('image_file4', ['type' => 'file', 'accept'=>'image/*',  'class' => 'form-control']);
                echo '<span id="textHelpBlock" class="form-text text-muted">Upload alternative angle of your artwork</span>';
                echo '</div>';
                echo '<div class="form-group col-md-3">';
                echo $this->Form->control('image_file5', ['type' => 'file', 'accept'=>'image/*', 'class' => 'form-control']);
                echo '<span id="textHelpBlock" class="form-text text-muted">Upload alternative angle of your artwork</span>';
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
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
