<li>
	<a href="/category/<?=$category['Category']['alias'] ?>">
		<?=$category['Category']['title'] ?>
	</a>
	<?php if($category['children']): ?>
		<ul>
			<?php echo $this->_catMenuHtml($category['children']) ?>
		</ul>
	<?php endif ?>
</li>