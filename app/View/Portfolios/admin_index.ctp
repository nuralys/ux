<a href="/admin/portfolios/add">Добавить порфолио</a>
<?php //debug($data) ?>
<ul>
	<?php foreach($data as $item): ?>
		<li class="news_item_admin">
			<div class="news_admin_title"><?=$item['Portfolio']['title']?> </div>
			<div class="news_edit">	<a href="portfolios/edit/<?=$item['Portfolio']['id']?>">Редактировать</a> </div> 
		<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Portfolio']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
		</li>
		<hr><br>
	<?php endforeach ?>
</ul>