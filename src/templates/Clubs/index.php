<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Club[]|\Cake\Collection\CollectionInterface $clubs
 */
?>
<div class="clubs index content">
    <?= $this->Html->link(__('New Club'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clubs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('clubname') ?></th>
                    <th><?= $this->Paginator->sort('coach') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clubs as $club): ?>
                <tr>
                    <td><?= $this->Number->format($club->id) ?></td>
                    <td><?= h($club->clubname) ?></td>
                    <td><?= h($club->coach) ?></td>
                    <td><?= h($club->created) ?></td>
                    <td><?= h($club->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $club->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $club->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $club->id], ['confirm' => __('Are you sure you want to delete # {0}?', $club->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
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
