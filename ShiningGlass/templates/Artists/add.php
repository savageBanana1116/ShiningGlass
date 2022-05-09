<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artist $artist
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Artists'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artists form content">
            <?= $this->Form->create($artist,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add Artist') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('image_file',['type'=>'file','class'=>'form-control']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
