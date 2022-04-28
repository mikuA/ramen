<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="students view content">
            <h3><?= h($student->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($student->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($student->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Club') ?></th>
                    <td><?= $student->has('club') ? $this->Html->link($student->club->id, ['controller' => 'Clubs', 'action' => 'view', $student->club->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($student->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Grade') ?></th>
                    <td><?= $this->Number->format($student->grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Class') ?></th>
                    <td><?= $this->Number->format($student->class) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth') ?></th>
                    <td><?= h($student->birth) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($student->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($student->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Tests') ?></h4>
                <?php if (!empty($student->tests)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Student Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Subject') ?></th>
                            <th><?= __('Score') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Teacher Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($student->tests as $tests) : ?>
                        <tr>
                            <td><?= h($tests->id) ?></td>
                            <td><?= h($tests->student_id) ?></td>
                            <td><?= h($tests->date) ?></td>
                            <td><?= h($tests->subject) ?></td>
                            <td><?= h($tests->score) ?></td>
                            <td><?= h($tests->created) ?></td>
                            <td><?= h($tests->modified) ?></td>
                            <td><?= h($tests->teacher_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tests', 'action' => 'view', $tests->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tests', 'action' => 'edit', $tests->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tests', 'action' => 'delete', $tests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tests->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
