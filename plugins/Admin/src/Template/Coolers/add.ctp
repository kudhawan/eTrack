<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($cooler, array('class' =>'form-validate')) ?>
    <fieldset>
        <legend><?= __('Add Cooler') ?></legend>
        <?php
            echo $this->Form->input('user_id', array('label' => 'User','empty'=>'Select','options' => $users));
            echo $this->Form->input('name', array('label' => 'Name'));
            echo $this->Form->input('max_temp', array('label' => 'Threshold Temperature (C)','required'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit') , ['class' =>'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
