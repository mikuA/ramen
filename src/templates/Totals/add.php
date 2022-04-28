<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Total $total
 * @var \Cake\Collection\CollectionInterface|string[] $ramens
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Totals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="totals form content">
            <?= $this->Form->create($total) ?>
            <fieldset>
                <legend><?= __('Add Total') ?></legend>
                <?php
                    echo $this->Form->control('date');
                    echo $this->Form->control('ramen_id', ['options' => $ramens, 'empty' => true]);
                    echo $this->Form->control('quantity');
                    echo $this->Form->control('acounting');
                    echo $this->Form->control('responsible');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
