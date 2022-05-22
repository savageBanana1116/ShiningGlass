<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enquiry $enquiry
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
            <?= $this->Form->postLink(__('Delete Enquiry'), ['action' => 'delete', $enquiry->id], ['class' => 'nav-item nav-link active btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $enquiry->id)]) ?>
                        </a>
                    </li>
                    <li class="nav-item" style="padding: 5px">
                        <a>
            <?= $this->Html->link(__('List Enquiries'), ['action' => 'index'], ['class' => 'nav-item nav-link active']) ?>
                        </a>
                    </li>
                    <li class="nav-item" style="padding: 5px">
                        <a>
            <?= $this->Html->link(__('New Enquiry'), ['action' => 'add'], ['class' => 'nav-item nav-link active']) ?>
                        </a>
                    </li>
        </div>
    </aside>
    <div id="enquiriesInfo" class="table-responsive" style="padding-top:10px;">
        <div class="enquiriesInfo view content">
            <h3>Enquiry From <?= h($enquiry->full_name) ?></h3>
            <br>
            <table class="table table-bordered" style="text-align: left">
                <tr>
                    <th><?= __('Full Name') ?></th>
                    <td><?= h($enquiry->full_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($enquiry->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enquiry Created') ?></th>
                    <td><?= h($enquiry->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Sent to Admin Folder') ?></th>
                    <td><?= $enquiry->email_sent ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Body') ?></th>
                    <td><?= $this->Text->autoParagraph(h($enquiry->body)); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
