<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teacher $teacher
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Teacher'), ['action' => 'edit', $teacher->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Teacher'), ['action' => 'delete', $teacher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teacher->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Teachers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Teacher'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="teachers view content">
            <h3><?= h($teacher->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($teacher->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($teacher->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($teacher->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($teacher->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Tests') ?></h4>
                <?php if (!empty($teacher->tests)) : ?>
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
                        <?php foreach ($teacher->tests as $tests) : ?>
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
