<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Club $club
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Clubs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clubs form content">
            <?= $this->Form->create($club) ?>
            <fieldset>
                <legend><?= __('Add Club') ?></legend>
                <?php
                    echo $this->Form->control('clubname');
                    echo $this->Form->control('coach');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
