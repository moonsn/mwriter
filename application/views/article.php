<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title><?php echo $title; ?></title>
</head>
<body>

<div id="container">
<?php foreach($articles as $row) { ?>
    <h1> 标题：<?php echo $row['title']; ?> </h1>
    <div> 
        作者：无名 时间：2014.1.24
    </div>
    <br />
    <div>
        这里是内容
        这里是内容
    </div>
    <br />
    <div>
        tags: hello world! 
    </div>
    <br />
<?php }?>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
