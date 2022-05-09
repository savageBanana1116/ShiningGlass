<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About $about
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>

            <?= $this->Html->link(__('List Abouts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="abouts form content">
            <?= $this->Form->create($about) ?>
            <fieldset>
                <legend><?= __('Edit About') ?></legend>
                <?php
                    echo $this->Form->control('title',['type'=>'text','class'=>'form-control']);
                    echo $this->Form->control('text',['type'=>'text','class'=>'form-control']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit',['class'=>'btn btn-primary','float'=>'right'])) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
