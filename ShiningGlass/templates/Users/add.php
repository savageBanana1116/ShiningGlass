

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?= $this->Html->css('cake.css') ?>


<div class="row" style="margin-top: 3vw ; margin-bottom: 5vw">
    <div class="d-flex justify-content-center h-200" style="padding-top: 20px">
        <div class="card" >
            <?= $this->Flash->render(); ?>
            <div class="card-header">
                <h3>Add new admin account</h3>
            </div>
            <div class="card-body ">
                <?= $this->Form->create($user) ?>
                <div class="input-group form-group" style="margin:10%">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user" style=""></i> <?=  $this->Form->control('email', ['required' => 'true', 'class' => 'form-control']); ?></span>
                    </div>

                </div>
                <div class="input-group form-group" style="margin:10%">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key" style=""></i><?= $this->Form->control('password',['required' => 'true', 'class' => 'form-control']); ?></span>
                    </div>
                </div>
                <div>
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success','style'=>'margin-top:1vw']) ?>
                    <?= $this->Form->end() ?>
                </div>
                </form>
            </div>

        </div>
    </div>

</div>

