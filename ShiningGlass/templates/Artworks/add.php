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
            <?= $this->Form->create($artwork,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add Artwork') ?></legend>
                <?php
                    echo $this->Form->control('name', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Enter Artwork Name', 'required' => 'required', 'maxlength' => '30']);
                   echo  '<span id="textHelpBlock" class="form-text text-muted">Max 30 characters</span>';

                    echo $this->Form->control('price', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Enter Artwork Price (No Dollar Sign)', 'maxlength' => '7', 'required' => 'required']);
                    echo  '<span id="textHelpBlock" class="form-text text-muted">Max 7 characters</span>';
                    echo $this->Form->control('weight', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Enter Artwork Weight (In Kg)', 'maxlength' => '7', 'required' => 'required']);
                    echo  '<span id="textHelpBlock" class="form-text text-muted">Max 7 characters</span>';
                    echo $this->Form->control('size', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Enter Artwork Size (In CM as Width * Height)', 'maxlength' => '7', 'required' => 'required']);
                    echo  '<span id="textHelpBlock" class="form-text text-muted">Max 7 characters</span>';
                    echo $this->Form->control('descriptions', ['type' => 'textarea', 'class' => 'form-control', 'placeholder' => 'Enter a short description about the artwork.', 'required' => 'required']);
                    echo  '<span id="textHelpBlock" class="form-text text-muted">Maximum 255 characters</span>';
                    echo $this->Form->control('create_date', ['class' => 'form-control', 'required' => 'required']);
                    echo  '<span id="textHelpBlock" class="form-text text-muted">Please select a date</span>';
                    echo $this->Form->control('categories._ids', ['options' => $categories, 'class' => 'form-control']);
                    echo  '<span id="textHelpBlock" class="form-text text-muted">Select a category if relevant to the Artwork, if not leave blank.</span>';
                    echo $this->Form->control('image_file',['type'=>'file', 'class' => 'form-control', 'required' => 'required']);
                    echo  '<span id="textHelpBlock" class="form-text text-muted">Upload the image of your artwork</span>';
                echo $this->Form->control('image_file2',['type'=>'file', 'class' => 'form-control', 'required' => 'required']);
                echo $this->Form->control('image_file3',['type'=>'file', 'class' => 'form-control', 'required' => 'required']);
                echo $this->Form->control('image_file4',['type'=>'file', 'class' => 'form-control', 'required' => 'required']);
                echo $this->Form->control('image_file5',['type'=>'file', 'class' => 'form-control', 'required' => 'required']);
                echo  '<span id="textHelpBlock" class="form-text text-muted">Upload the Minor images of your artwork</span>';

                ?>

            </fieldset>
            <br>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
