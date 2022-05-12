<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artist $artist
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
                            <?= $this->Html->link(__('List Artists'),
                                ['action' => 'index'],
                                ['class' => 'nav-item nav-link active btn btn-primary']) ?>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="column-responsive column-80" align="left">
        <div class="artists form content">
            <?= $this->Form->create($artist, ['enctype' => 'multipart/form-data']) ?>
            <fieldset>
                <legend><?= __('Edit Artist') ?></legend>
                <?php
                //echo $this->Form->control('id');
                echo $this->Form->control('name', ['type' => 'text', 'class' => 'form-control','placeholder' => 'Enter Artist Name', 'maxlength' => '64', 'required' => 'required']);
                echo '<span id="textHelpBlock" class="form-text text-muted">Max 64 characters</span>';
                echo $this->Form->control('image_file', ['type' => 'file', 'class' => 'form-control','accept'=>'image/*']);
                echo '<span id="textHelpBlock" class="form-text text-muted">Please upload an image file only (jpg/png)</span>';
                //debug($_POST);
                ?>
                <h10 style="color: darkgrey"><?php echo "Current image: ";
                $imageNoPath = $artist->image;
                echo substr($imageNoPath,"11")
                //echo $artist->image?></h10>
            </fieldset>
            <br>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn-success']) ?>
            <?= $this->Form->end() ?>

        </div>
    </div>
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
