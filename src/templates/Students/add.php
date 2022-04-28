<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 * @var \Cake\Collection\CollectionInterface|string[] $clubs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->create($topic, ['type' => 'file']); ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="students form content">
            <?= $this->Form->create($student) ?>
            <fieldset>
                <legend><?= __('Add Student') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('birth');
                    echo $this->Form->control('grade');
                    echo $this->Form->control('class');
                    echo $this->Form->control('club_id', ['options' => $clubs]);
                    echo $this -> Form -> file ( "fileupload" );
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
