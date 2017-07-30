	<form>

	<div class="field">
	  <div class="control">
		<input class="input is-medium" name="first-name" type="text" placeholder="First Name">
	  </div>
	</div>
	<div class="field">
	  <div class="control">
		<input class="input is-medium" name="middle-name" type="text" placeholder="Middle Name">
	  </div>
	</div>
	
	<div class="field">
	  <div class="control">
		<input class="input is-medium" name="last-name" type="text" placeholder="Last Name">
	  </div>
	</div>
	
	<div class="field">
		<div class="control">
			<div class="select is-medium">
				<select name="position-id">
				<?php foreach ($positions as $position) { ?>
					<option value="<?php if (isset($position->id)) echo htmlspecialchars($position->id, ENT_QUOTES, 'UTF-8'); ?>">
						<?php if (isset($position->name)) echo htmlspecialchars($position->name, ENT_QUOTES, 'UTF-8'); ?>
					</option>
				<?php } ?>
				</select>
			</div>
		</div>
	</div>
	
</form>