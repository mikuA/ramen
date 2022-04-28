<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Total $total
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Total'), ['action' => 'edit', $total->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Total'), ['action' => 'delete', $total->id], ['confirm' => __('Are you sure you want to delete # {0}?', $total->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Totals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Total'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="totals view content">
            <h3><?= h($total->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($total->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ramen') ?></th>
                    <td><?= $total->has('ramen') ? $this->Html->link($total->ramen->name, ['controller' => 'Ramens', 'action' => 'view', $total->ramen->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Responsible') ?></th>
                    <td><?= h($total->responsible) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($total->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $total->quantity === null ? '' : $this->Number->format($total->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Acounting') ?></th>
                    <td><?= $total->acounting === null ? '' : $this->Number->format($total->acounting) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
