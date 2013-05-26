<div class="container">
	<div class="row">
	<div class="span3 left-nav">
	<?= $leftnav;?>
	</div>
		<div class="span9 main">
			<div class="content">
				<h1><? if(!isset($h1)){ echo $title;}else{ echo $h1; } ?></h1>
				<? if($image!=''){ ?>
				<img src="<?=$image?>"/>
				<? } ?>
				<p><?=$content?>
				</p>
			</div>
		</div>
	</div>
</div>