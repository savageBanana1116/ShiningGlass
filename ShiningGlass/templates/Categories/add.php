<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 * @var \Cake\Collection\CollectionInterface|string[] $artworks
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80" align="left">
        <div class="categories form content">
            <?= $this->Form->create($category) ?>
            <fieldset>
                <legend><?= __('Add Category') ?></legend>
                <?php
                    echo $this->Form->control('name', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Enter Category Name', 'required' => 'required', 'maxlength' => '30']);
                    echo  '<span id="textHelpBlock" class="form-text text-muted">Max 30 characters</span>';
        
                    echo $this->Form->control('description', ['type' => 'textarea', 'class' => 'form-control', 'placeholder' => 'Enter Category Description', 'required' => 'required']);
                    echo  '<span id="textHelpBlock" class="form-text text-muted">Max 255 characters</span>';
                    echo $this->Form->control('create_date', ['class' => 'form-control', 'required' => 'required']);
                    echo  '<span id="textHelpBlock" class="form-text text-muted">Enter the date that the category was created</span>';
                ?>
            </fieldset<br>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
