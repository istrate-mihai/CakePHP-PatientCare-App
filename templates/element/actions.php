<h4 class="heading">
    <?= __('Actions'); ?>
</h4>

<ul class="side-nav">
    <li>
        <?= $this->Html->link(__('New ' . $type), array(
            'action' => 'add'
        )); ?>
    </li>

    <li>
        <?= $this->Html->link(__('List ' . $typePlural), array(
            'action' => 'index'
        )); ?>
    </li>
</ul>
