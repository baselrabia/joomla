<?php

defined('_JEXEC') or die;
?>

<ul class="random-articles">
	<?php foreach($articles as $article): ?>
		<li> 
			<a herf="<?php echo $article->link; ?>">
				<?php echo $article->title; ?>
			</a>
		</li>
	<?php endforeach ?>
</ul>