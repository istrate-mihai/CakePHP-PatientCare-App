<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patient $patient
 * @var string[]|\Cake\Collection\CollectionInterface $carriers
 */
?>
<div class="row">
    <aside class="column">
        <?=
            $this->element('actions', array(
                'type'       => 'Patient',
                'typePlural' => 'Patients'
            ));
        ?>
    </aside>
    <div class="column-responsive column-80">
        <div class="patients form content">
            <?= $this->Form->create($patient) ?>
            <fieldset>
                <legend><?= __('Edit Patient') ?></legend>
                <?php
                    echo $this->Form->control('carrier_id', ['options' => $carriers]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('street_address');
                    echo $this->Form->control('city');
                    echo $this->Form->control('state');
                    echo $this->Form->control('zipcode');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
