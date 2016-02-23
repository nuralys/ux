<div class="title admin_t">Редактирование отзыва</div>
<div class="model_info">
<?php
echo $this->Form->create('Review');
echo $this->Form->input('title', array('label' => 'ФИО', 'class' => 'admin_input_f model fl_r'));
echo $this->Form->input('body', array('label' => 'Текст отзыва', 'id' => 'editor'));
?>
</div>
	<?
	echo $this->Form->end('Редактировать');
	?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>