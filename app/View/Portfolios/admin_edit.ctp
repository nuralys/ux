<div class="title admin_t">Редактирование</div>
<div class="model_info">
<?php
echo $this->Form->create('Portfolio', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название', 'class' => 'admin_input_f model fl_r'));
echo $this->Form->input('requirements', array('label' => 'Цель'));
echo $this->Form->input('pf1', array('label' => 'requirements 1', 'type' => 'file'));
echo $this->Form->input('pf2', array('label' => 'requirements 2', 'type' => 'file'));
echo $this->Form->input('pf3', array('label' => 'requirements 3', 'type' => 'file'));
echo $this->Form->input('solutions', array('label' => 'Результат'));
echo $this->Form->input('pf4', array('label' => 'solution 1', 'type' => 'file'));
echo $this->Form->input('pf5', array('label' => 'solution 2', 'type' => 'file'));
echo $this->Form->input('pf6', array('label' => 'solution 3', 'type' => 'file'));

?>
</div>
<?php
echo $this->Form->end('Редактировать');
?>
</div>