<div class="title admin_t">
		<h2>Добавление портфолио</h2>
	</div>
<?php 

echo $this->Form->create('Portfolio', array('enctype'=>'multipart/form-data'));
echo $this->Form->input('title', array('label' => 'TITLE', 'class' => 'admin_input_f model '));
echo $this->Form->input('requirements', array('label' => 'REQUIREMENTS', 'class' => 'admin_input_f model '));
// echo $this->Form->input('body', array('label' => '', 'id' => 'editor'));
echo $this->Form->input('pf1', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->input('pf2', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->input('pf3', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->input('solutions', array('label' => 'SOLUTION', 'class' => 'admin_input_f model '));
echo $this->Form->input('pf4', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->input('pf5', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->input('pf6', array('label' => 'Изображение:', 'type' => 'file'));
// echo $this->Form->input('keywords', array('label' => '', 'class' => 'admin_input_f model ', 'placeholder' => 'Ключевые слова '));
// echo $this->Form->input('description', array('label' => '', 'class' => 'admin_input_f model ','placeholder' => 'Описание '));
// echo $this->Form->input('date', array('label' => 'Дата:'));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>