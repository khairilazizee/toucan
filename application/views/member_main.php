<br>
<div class="row">
	<div class="large-12 small-12 columns">
		<div class="title-bar">
			<div class="title-bar-left">
				<div class="title-bar-title">Member</div>
			</div>
		</div>
		<div class="callout">
			<div class="row">
				<div class="large-12 small-12 columns">
					<div class="float-right">
						<button class="button small" onclick="location.href='<?php echo base_url();?>member/new_member'">New Member</button>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
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
							<?php $bil=0; $this->load->helper("general"); foreach($member_list as $reg): $bil++; ?>
								<tr>
									<td><?php echo $bil;?></td>
									<td><?php echo $reg->member_name;?></td>
									<td><?php echo $reg->member_email;?></td>
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