<div class="container">
	<div class="row">
	<?= $this->load->view('left');?>
		<div class="span9 page">
			<div class="content">
				<? $this->load->view($modules.'/'.$view_file); ?>
			</div>
		</div>
	</div>
</div>