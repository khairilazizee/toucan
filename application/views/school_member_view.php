<br>
<div class="row">
	<div class="large-12 small-12 columns">
		<div class="title-bar">
			<div class="title-bar-left">
				<div class="title-bar-title">
					<?php foreach($maklumat_sekolah as $school):?> 
					<?php echo $school->school_desc;?>'s
					<?php endforeach;?>
					member 
				</div>
			</div>
		</div>
		<div class="callout">
			<div class="row">
				<table width="100%">
					<thead>
						<tr>
							<td width="3">#</td>
							<td>Name</td>
							<td>Email</td>
							<td colspan="2">Action</td>
						</tr>
					</thead>
					<tbody>
						<?php $bil=0; $this->load->helper("general"); foreach($maklumat_member as $member): $bil++; ?>
							<tr>
								<td><?php echo $bil;?></td>
								<td><?php echo $member->member_name;?></td>
								<td><?php echo $member->member_email;?></td>
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