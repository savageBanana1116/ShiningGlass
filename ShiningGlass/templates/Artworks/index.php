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
        padding: 10px;
    }
    .grid-container {
        display: grid;
        column-gap: 50px;
    }
</style>
<?= $this->Html->link(__('New Artwork'), ['action' => 'add'], ['class' => 'button float-right']) ?>
<div class="grid-container">
            <?php foreach ($artworks as $artwork): ?>


                <div class="grid-item"><?= $this->Html->image($artwork->image, ['class' => 'image']) ?><br><?= $this->Html->link(__($artwork->descriptions), ['action' => 'view', $artwork->id]) ?></div>

                <!--                        <div class="grid-item">2</div>-->
                <!--                        <div class="grid-item">3</div>-->
                <!--                        <div class="grid-item">4</div>-->
                <!--                        <div class="grid-item">5</div>-->
                <!--                        <div class="grid-item">6</div>-->
                <!--                        <div class="grid-item">7</div>-->
                <!--                        <div class="grid-item">8</div>-->
                <!--                        <div class="grid-item">9</div>-->
            <?php endforeach; ?>
        </div>
        <!--            </tbody>-->
        <!--        </table>-->
        <!--    </div>-->
        <div class="paginator">
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
