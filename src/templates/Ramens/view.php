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
            <?= $this->Html->link(__('Edit Ramen'), ['action' => 'edit', $ramen->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ramen'), ['action' => 'delete', $ramen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ramen->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ramens'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ramen'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ramens view content">
            <h3><?= h($ramen->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($ramen->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($ramen->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($ramen->price) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Totals') ?></h4>
                <?php if (!empty($ramen->totals)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Ramen Id') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Acounting') ?></th>
                            <th><?= __('Responsible') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ramen->totals as $totals) : ?>
                        <tr>
                            <td><?= h($totals->id) ?></td>
                            <td><?= h($totals->date) ?></td>
                            <td><?= h($totals->ramen_id) ?></td>
                            <td><?= h($totals->quantity) ?></td>
                            <td><?= h($totals->acounting) ?></td>
                            <td><?= h($totals->responsible) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Totals', 'action' => 'view', $totals->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Totals', 'action' => 'edit', $totals->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Totals', 'action' => 'delete', $totals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $totals->id)]) ?>
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
