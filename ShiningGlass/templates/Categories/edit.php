<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 * @var string[]|\Cake\Collection\CollectionInterface $artworks
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
                                ['action' => 'delete', $category->id],
                                ['confirm' => __('Are you sure you want to delete {0}?', $category->name),
                                    'class' => 'nav-item nav-link active btn-danger']
                            ) ?>
                        </a>
                        </li>
                    <li class="nav-item" style="padding: 5px">
                        <a>
                            <?= $this->Html->link(__('List Collection'),
                                ['action' => 'index'],
                                ['class' => 'nav-item nav-link active']) ?>
                        </a>
                    </li>
            </nav>
        </div>
    </aside>
    <div class="column-responsive column-80" align="left">
        <div class="categories form content">
            <?= $this->Form->create($category) ?>
            <fieldset>
                <legend><?= __('Edit Collection') ?></legend>
                <?php
                echo $this->Form->control('name', ['type' => 'text', 'class' => 'form-control', 'required' => 'required', 'maxlength' => '30']);
                echo  '<span id="textHelpBlock" class="form-text text-muted">Max 30 characters</span>';
                echo $this->Form->control('description', ['type' => 'textarea', 'class' => 'form-control', 'required' => 'required', 'maxlength' => '255']);
                echo  '<span id="textHelpBlock" class="form-text text-muted">Max 255 characters</span>';
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
