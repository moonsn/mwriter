<div id="container">
	<div calss="row">
	<div class="col-md-8 col-md-offset-2">
<h1> <?php echo $article['title']; ?> </h1>
<div>
	author:<?php echo $article['author']; ?>  time:<?php echo date('Y-m-d H:i:s', $article['post_date']); ?>
</div>
<br />
<div>
<?php
	echo $article['content'];
?>
</div>

	</div>
	</div>
</div>
