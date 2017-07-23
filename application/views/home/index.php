<?php if (!$this) { exit(header('HTTP/1.0 403 Forbidden')); } ?>

<div class="container">
    <h2>Reimbursement Form</h2>
    
	
	<form class="col s12">
		
		<div class="row">
			<div class="input-field col s8">
				<input value="" id="messengers" type="text" class="validate">
				<label for="messengers">Messengers</label>
			</div>

			<div class="input-field col s4">
				<input value="" id="week" type="number" class="validate" onclick="Materialize.toast('Number Only', 2000)">
				<label for="week">Week</label>
			</div>
		</div>
		
		<table class="bordered striped highlight">
			<thead>
				<tr>
					<th>No.</th>
					<th>Date</th>
					<th>PQ Inspector</th>
					<th>From Official Station To:<br />
					|and vise-versa|</th>
					<th>Total Kms.</th>
					<th>Rate Per km</th>
					<th>Amt. of Transportation</th>
					<th>Add Meals</th>
					<th>Total Amt of<br />Reimbursement</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>1</td>
					<td>24-Apr-17</td>
					<td>Raymond C. Fuentes</td>
					<td>|Casig-ang| Parangan</td>
					<td>120</td>
					<td>12.00</td>
					<td>1,440.00</td>
					<td>75.00</td>
					<td>1,515.00</td>
				</tr>
				
				<tr>
					<td>1</td>
					<td>24-Apr-17</td>
					<td>Raymond C. Fuentes</td>
					<td>|Casig-ang| Parangan</td>
					<td>120</td>
					<td>12.00</td>
					<td>1,440.00</td>
					<td>75.00</td>
					<td>1,515.00</td>
				</tr>
				
				<tr>
					<td>1</td>
					<td>24-Apr-17</td>
					<td>Raymond C. Fuentes</td>
					<td>|Casig-ang| Parangan</td>
					<td>120</td>
					<td>12.00</td>
					<td>1,440.00</td>
					<td>75.00</td>
					<td>1,515.00</td>
				</tr>
				
				
			</tbody>
		</table>
		
		<div class="row">
			<div class="input-field col s6">
				<input value="" id="officer-incharge" type="text" class="validate">
				<label for="officer-incharge">Officer Incharge</label>
			</div>

			<div class="input-field col s6">
				<input value="" id="conforme" type="text" class="validate">
				<label for="conforme">Conforme</label>
			</div>
		</div>

	</form>

</div>
