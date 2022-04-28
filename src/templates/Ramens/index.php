<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ramen[]|\Cake\Collection\CollectionInterface $ramens
 */
?>
<div class="ramens index content">
    <?= $this->Html->link(__('New Ramen'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ramens') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ramens as $ramen): ?>
                <tr>
                    <td><?= h($ramen->id) ?></td>
                    <td><?= h($ramen->name) ?></td>
                    <td><?= $this->Number->format($ramen->price) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ramen->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ramen->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ramen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ramen->id)]) ?>
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
