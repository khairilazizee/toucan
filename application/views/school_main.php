<br>
<div class="row">
	<div class="large-12 small-12 columns">
		<div class="title-bar">
			<div class="title-bar-left">
				<div class="title-bar-title">School</div>
			</div>
		</div>
		<div class="callout">
			<div class="row">
				<div class="large-12 small-12 columns">
					<div class="float-right">
						<button class="button small" onclick="location.href='<?php echo base_url();?>school/new_school'">New School</button>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<table width="100%">
						<thead>
							<tr>
								<td width="3">#</td>
								<td>School</td>
								<td>Member</td>
								<td colspan="2">Action</td>
							</tr>
						</thead>
						<tbody>
							<?php $bil=0; $this->load->helper("general"); foreach($maklumat_sekolah as $school): $bil++; ?>
								<tr>
									<td><?php echo $bil;?></td>
									<td><?php echo $school->school_desc;?></td>
									<td width="10"><a href="<?php echo base_url();?>school/view_member/<?php echo $school->school_id;?>"><?php echo count_member($school->school_id);?></a></td>
									<td width="10">Edit</td>
									<td width="10">Delete</td>
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>