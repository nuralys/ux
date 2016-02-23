<div class="title admin_t">
		<h3>Добавление клиента</h3>
	</div>
<?php 

echo $this->Form->create('Client', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название', 'class' => 'admin_input_f model '));
echo $this->Form->input('img', array('label' => 'Логотип', 'type' => 'file'));
echo $this->Form->input('link', array('label' => 'Ссылка'));
echo $this->Form->end('Создать');
?>
</div>