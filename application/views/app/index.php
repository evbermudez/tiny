<?php if (!$this) { exit(header('HTTP/1.0 403 Forbidden')); } ?>
<div class="section">
	<div class="container">
		<h2 class="title is-2 has-text-centered">System</h2>
		<hr />
		<div class="columns">
			<div class="column">
				<div class="panel">
					<div class="panel-heading">
						<h2 class="title">Employees</h2>
					</div>
					<div class="panel-block">
				
						<button class="button modal-trigger modal-add-employee"><i class="fa fa-user-plus"></i>Add Employee</button>
					</div>
					<div class="panel-block">
						<table class="table is-bordered is-striped">
							<thead>
								<tr>
									<th>Name</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($employees as $employee) { ?>
								<tr>
									<td class="hightlight-bold">
									<?php if (isset($employee->last_name)) echo htmlspecialchars($employee->last_name, ENT_QUOTES, 'UTF-8'); ?>,
									
									<?php if (isset($employee->first_name)) echo htmlspecialchars($employee->first_name, ENT_QUOTES, 'UTF-8'); ?>
									</td>
									
									<td class="action-button">
										<button class="button" data-id="<?php if (isset($employee->id)) echo htmlspecialchars($employee->id, ENT_QUOTES, 'UTF-8'); ?>"><i class="fa fa-edit"></i> Edit</button>
										<button class="button" data-id="<?php if (isset($employee->id)) echo htmlspecialchars($employee->id, ENT_QUOTES, 'UTF-8'); ?>"><i class="fa fa-trash"></i> Delete</button>
									</td>
								</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Name</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
				
					</div>
				</div><!-- .panel -->
			
			</div>
			
			<div class="column">
				<div class="panel">
					<div class="panel-heading">
						<h2 class="title">Messengers</h2>
					</div>
					<div class="panel-block">
				
						<button class="button modal-trigger modal-add-messenger"><i class="fa fa-users"></i>Add Messenger</button>
						
					</div>
					<div class="panel-block">
						<table class="table is-bordered is-striped">
							<thead>
								<tr>
									<th>Name</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($messengers as $messenger) { ?>
								<tr>
									<td class="hightlight-bold">
									<?php if (isset($messenger->name)) echo htmlspecialchars($messenger->name, ENT_QUOTES, 'UTF-8'); ?>
									</td>
									<td class="action-button">
										<button class="button" data-id="<?php if (isset($messenger->id)) echo htmlspecialchars($messenger->id, ENT_QUOTES, 'UTF-8'); ?>"><i class="fa fa-edit"></i> Edit</button>
										<button class="button" data-id="<?php if (isset($messenger->id)) echo htmlspecialchars($messenger->id, ENT_QUOTES, 'UTF-8'); ?>"><i class="fa fa-trash"></i> Delete</button>
									</td>
								</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Name</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
				
					</div>
					
				</div><!-- .panel -->
			</div>
			
			<div class="column">
				<div class="panel">
					<div class="panel-heading">
						<h2 class="title">Forms</h2>
					</div>
					<div class="panel-block">
				
						<button class="button modal-trigger modal-add-form"><i class="fa fa-file"></i>Add Form</button>
						
					</div>
					<div class="panel-block">
						<table class="table is-bordered is-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>1</th>
									<th>SUCREX</th>
								</tr>
								<tr>
									<th>2</th>
									<th>AMBOT</th>
								</tr>
								<tr>
									<th>3</th>
									<th>WA-IL</th>
								</tr>
								<tr>
									<th>4</th>
									<th>AAA</th>
								</tr>
								<tr>
									<th>5</th>
									<th>BBB</th>
								</tr>
								<tr>
									<th>6</th>
									<th>CCC</th>
								</tr>
								<tr>
									<th>7</th>
									<th>DDD</th>
								</tr>
								<tr>
									<th>8</th>
									<th>EEE</th>
								</tr>
								<tr>
									<th>9</th>
									<th>FFF</th>
								</tr>
								<tr>
									<th>10</th>
									<th>GGG</th>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>ID</th>
									<th>Name</th>
								</tr>
							</tfoot>
						</table>
				
					</div>
					
				</div><!-- .panel -->
			</div>
			
			
			<div class="column">
				<div class="panel">
					<div class="panel-heading">
						<h2 class="title">Position</h2>
					</div>
					<div class="panel-block">
				
						<button class="button modal-trigger modal-add-position"><i class="fa fa-id-badge"></i>Add Position</button>
						
					</div>
					<div class="panel-block">
						<table class="table is-bordered is-striped" id="table-position">
							<thead>
								<tr>
									<th>Name</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($positions as $position) { ?>
								<tr>
									<td class="hightlight-bold">
										<?php if (isset($position->name)) echo htmlspecialchars($position->name, ENT_QUOTES, 'UTF-8'); ?>
									</td>
									<td class="action-button">
										<button class="button" data-id="<?php if (isset($position->id)) echo htmlspecialchars($position->id, ENT_QUOTES, 'UTF-8'); ?>"><i class="fa fa-edit"></i> Edit</button>
										<button class="button" data-id="<?php if (isset($position->id)) echo htmlspecialchars($position->id, ENT_QUOTES, 'UTF-8'); ?>"><i class="fa fa-trash"></i> Delete</button>
									</td>
								</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Name</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
				
					</div>
					
				</div><!-- .panel -->
			</div>
		</div><!-- .columns -->
	</div>
</div>
