<a href="/admin/clients/add">Добавить клиента</a>
<?php //debug($data) ?>
<ul>
	<?php foreach($data as $item): ?>

		<li class="news_item_admin">
			<div class="news_admin_title"><?=$item['Client']['title']?> </div>
			<div class="news_edit">	<a href="clients/edit/<?=$item['Client']['id']?>">Редактировать</a> </div> 
		<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Client']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
		</li>
		<hr><br>
	<?php endforeach ?>
</ul>