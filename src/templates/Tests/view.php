<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test $test
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Test'), ['action' => 'edit', $test->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Test'), ['action' => 'delete', $test->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tests'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Test'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tests view content">
            <h3><?= h($test->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $test->has('student') ? $this->Html->link($test->student->name, ['controller' => 'Students', 'action' => 'view', $test->student->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject') ?></th>
                    <td><?= h($test->subject) ?></td>
                </tr>
                <tr>
                    <th><?= __('Teacher') ?></th>
                    <td><?= $test->has('teacher') ? $this->Html->link($test->teacher->name, ['controller' => 'Teachers', 'action' => 'view', $test->teacher->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($test->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Score') ?></th>
                    <td><?= $this->Number->format($test->score) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($test->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($test->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($test->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
