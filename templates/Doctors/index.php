<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Doctor> $doctors
 */
?>
<div class="doctors index content">
    <h3><?= __('Doctors') ?></h3>

    <?=
        $this->element('actions', array(
            'type'       => 'Doctor',
            'typePlural' => 'Doctors'
        ));
    ?>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('accepting_patients') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($doctors as $doctor): ?>
                <tr>
                    <td><?= $this->Number->format($doctor->id) ?></td>
                    <td><?= h($doctor->name) ?></td>
                    <?php if ($doctor->accepting_patients == 1): ?>
                        <td>
                            <span style="color: green"> Yes</span>
                        </td>
                    <?php else: ?>
                        <td>
                            <span style="color: red"> No</span>
                        </td>
                    <?php endif; ?>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $doctor->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $doctor->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $doctor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->id)]) ?>
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
