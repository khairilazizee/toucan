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
					<form action="<?php echo base_url();?>register/add_registration" method="POST">
						<div class="row">
							<div class="large-12 columns">
								<label for="">Student Name</label>
								<select name="slxStudentName" id="">
									<option value="">- CHOOSE -</option>
									<?php foreach($member_list as $member):?>
										<option value="<?php echo $member->member_id;?>"><?php echo $member->member_name;?></option>
									<?php endforeach;?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<label for="">School Name</label>
								<select name="slxSchoolName" id="">
									<option value="">- CHOOSE -</option>
									<?php foreach($school_list as $school):?>
										<option value="<?php echo $school->school_id;?>"><?php echo $school->school_desc;?></option>
									<?php endforeach;?>
								</select>
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