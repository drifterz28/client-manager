<div class="container">
	<div class="row">
	<?= $this->load->view('left');?>
		<div class="span9 main">
			<div class="content">
				<h1><? if(!isset($h1)){ echo $title;}else{ echo $h1; } ?></h1>
				<? if($image!=''){ ?>
				<img src="<?=$image?>"/>
				<? } ?>
					<form class="form-horizontal" action="https://orderexec.com/memberaction" method="post">
						<fieldset>
							<legend>Signin up for a free 30 day trail!</legend>
							<div class="control-group">
								<label class="control-label" for="input01">Full Name</label>
								<div class="controls">
									<input type="text" class="input-xlarge" name="fname" id="input01">
									<input type="hidden" name="action" value="signup">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input02">Your Email Address</label>
								<div class="controls">
									<input type="email" class="input-xlarge" name="email" id="input02">
									<p class="help-block">This is used for login</p>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input03">Password</label>
								<div class="controls">
									<input type="password" name="passwrd" class="input-xlarge" id="input03">
									<p class="help-block">Must include one uppercase letter and a number<br/> and be a minimum 8 characters in length</p>
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<input type="password" name="passwd" class="input-xlarge" id="input04">
									<p class="help-block">Passwords must match.</p>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input05">Primary Store URL</label>
								<div class="controls">
									<input type="url" name="url" class="input-xlarge" id="input05">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input05">Primary Store ID</label>
								<div class="controls">
									<input type="text" name="storeid" class="input-xlarge" id="input05">
									<p class="help-block">If not a Yahoo! store leave blank</p>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input07">Free Trial Item</label>
								<div class="controls">
									<select name="free" class="input-xlarge" id="input07">
										<option value="1">Promo Bar</option>
										<option value="2">Cart Capture</option>
										<option value="3">Site Feedback</option>
										<option value="4">USPS / UPS real time rates</option>
									</select>
								</div>
							</div>
							<button class="btn btn-danger btn-large"> Submit </button>
						</fieldset>
					</form>
			</div>
		</div>
	</div>
</div>