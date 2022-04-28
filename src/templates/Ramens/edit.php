<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ramen $ramen
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ramen->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ramen->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ramens'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ramens form content">
            <?= $this->Form->create($ramen) ?>
            <fieldset>
                <legend><?= __('Edit Ramen') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('price');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
