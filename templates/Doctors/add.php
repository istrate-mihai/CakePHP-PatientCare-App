<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doctor $doctor
 */
?>
<div class="row">
    <aside class="column">
        <?=
            $this->element('actions', array(
                'type'       => 'Doctor',
                'typePlural' => 'Doctors'
            ));
        ?>
    </aside>
    <div class="column-responsive column-80">
        <div class="doctors form content">
            <?= $this->Form->create($doctor) ?>
            <fieldset>
                <legend><?= __('Add Doctor') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('accepting_patients');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
