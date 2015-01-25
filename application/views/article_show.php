<!DOCTYPE html>
<html lang="en">
<head>
	<mata charset="utf-8">
	<title> <?php echo $article['title']; ?> </title>
</head>
<body>

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

</body>
</html>
