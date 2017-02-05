<br>
<div class="row">
	<div class="large-12 small-12 columns">
		<div class="title-bar">
			<div class="title-bar-left">
				<div class="title-bar-title">
					New Registration
				</div>
			</div>
		</div>
		<div class="callout">
			<div class="row">
				<div class="large-12 columns">
					<form action="<?php echo base_url();?>member/add_member" method="POST">
						<div class="row">
							<div class="large-12 columns">
								<label for="">Name</label>
								<input type="text" name="inpName">
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<label for="">Email</label>
								<input type="email" name="inpEmail">
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<input type="submit" class="button small" value="Register">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>