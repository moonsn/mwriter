<div id="container">
	<div calss="row">
	<div class="col-md-8 col-md-offset-2">
<?php foreach($articles as $row) { ?>
    <h1> 标题：<?php echo $row['title']; ?></h1>
    <div> 
	作者: <?php echo $row['author'];?> 时间：<?php echo date("Y-m-d H:i:s", $row['post_date']);?>
    </div>
    <br />
    <div>
		<?php echo $row['content']; ?>
    </div>
    <br />
    <div>
        tags: hello world! 
    </div>
    <br />
<?php }?>
	</div>
	</div>
</div>
