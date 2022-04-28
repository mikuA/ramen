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
            <?= $this->Html->link(__('Edit Club'), ['action' => 'edit', $club->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Club'), ['action' => 'delete', $club->id], ['confirm' => __('Are you sure you want to delete # {0}?', $club->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clubs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Club'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clubs view content">
            <h3><?= h($club->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Clubname') ?></th>
                    <td><?= h($club->clubname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Coach') ?></th>
                    <td><?= h($club->coach) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($club->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($club->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($club->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Students') ?></h4>
                <?php if (!empty($club->students)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Birth') ?></th>
                            <th><?= __('Grade') ?></th>
                            <th><?= __('Class') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Club Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($club->students as $students) : ?>
                        <tr>
                            <td><?= h($students->id) ?></td>
                            <td><?= h($students->name) ?></td>
                            <td><?= h($students->gender) ?></td>
                            <td><?= h($students->birth) ?></td>
                            <td><?= h($students->grade) ?></td>
                            <td><?= h($students->class) ?></td>
                            <td><?= h($students->created) ?></td>
                            <td><?= h($students->modified) ?></td>
                            <td><?= h($students->club_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Students', 'action' => 'view', $students->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Students', 'action' => 'edit', $students->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Students', 'action' => 'delete', $students->id], ['confirm' => __('Are you sure you want to delete # {0}?', $students->id)]) ?>
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
