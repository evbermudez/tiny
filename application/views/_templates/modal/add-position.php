
	<form action="<?php echo URL_WITH_INDEX_FILE; ?>app/addposition" method="POST">
		<div class="field">
		  <div class="control">
			<input class="input is-medium" name="name" type="text" placeholder="Name">
		  </div>
		</div>
		
		<div class="field">
		  <div class="control">
			<input class="input is-medium" name="description" type="text" placeholder="Description">
		  </div>
		</div>
		<input type="submit" name="submit_add_position" style="display:none"/>
	</form>
	
