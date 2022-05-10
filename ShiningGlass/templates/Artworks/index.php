<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artwork[]|\Cake\Collection\CollectionInterface $artworks
 */
?>
<style>
    img {
        width: 100%;
        height: 100%;
        max-width: 150px;
        max-height: 150px;
        padding: 5px;
    }

    .grid-container {
        display: grid;
        column-gap: 10px;
    }
</style>

<?= $this->Html->css('styles.css') ?>
<?= $this->Html->css('cake.css') ?>

<div class="artworks-index-content">
    <aside class="column">
        <div class="side-nav">
            <h3><?= __('Artworks') ?></h3>
            <nav class="nav justify-content-center nav-pills nav-fill" style="padding: 5px">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item" style="padding: 5px">
                        <a>
                            <?= $this->Html->link(__('New Artwork'), ['action' => 'add'], ['class' => 'nav-item nav-link active btn btn-primary']) ?>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="grid-container">
        <?php foreach ($artworks as $artwork): ?>
            <div class="grid-item">
                <?= $this->Html->image($artwork->image,
                    ['class' => 'image'])
                ?>
                <br>
                <?= $this->Html->link(__($artwork->name),
                    ['action' => 'view', $artwork->id])
                ?>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="paginator" style="justify-content: center">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
