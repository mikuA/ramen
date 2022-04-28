<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Total[]|\Cake\Collection\CollectionInterface $totals
 */
?>
<div class="totals index content">
    <?= $this->Html->link(__('New Total'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Totals') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('日付') ?></th>
                    <th><?= $this->Paginator->sort('商品名') ?></th>
                    <th><?= $this->Paginator->sort('本当の売上') ?></th>
                    <th><?= $this->Paginator->sort('レジが入力した売上') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($totals as $total): ?>
                <tr>
                    <td><?= $this->Number->format($total->id) ?></td>
                    <td><?= h($total->date) ?></td>
                    <td><?= $total->has('ramen') ? $this->Html->link($total->ramen->name, ['controller' => 'Ramens', 'action' => 'view', $total->ramen->id]) : '' ?></td>
                    <td><?php echo($total->quantity)*($total->ramen->price)  ?></td>
                    <td><?= $total->acounting === null ? '' : $this->Number->format($total->acounting) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $total->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $total->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $total->id], ['confirm' => __('Are you sure you want to delete # {0}?', $total->id)]) ?>
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
