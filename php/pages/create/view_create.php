<div class="col-md-12" id="create">
	<form id="createForm" method="post" action="preview">
		<h4>Personal details</h4>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="fullName">Full name</label>
				<input type="text" name="fullName" class="form-control" id="fullName" placeholder="Mikko Mallikas" required />
			</div>
			<div class="form-group col-md-3">
				<label for="email">Email</label>
				<input type="text" name="email" class="form-control" id="email" placeholder="email@address.com" required />
			</div>
			<div class="form-group col-md-3">
				<label for="dob">Date of birth</label>
				<input type="text" name="dob" class="form-control" id="dob" placeholder="3.11.2020" required />
			</div>
			<div class="form-group col-md-3">
				<label for="phone">Phone</label>
				<input type="text" name="phone" class="form-control" id="phone" placeholder="+358 40 123 4567" required />
			</div>
		</div>
		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" name="address" class="form-control" id="address" placeholder="Kotitie 3 B2" required />
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="city">City</label>
				<input type="text" name="city" class="form-control" id="city" placeholder="Vantaa" required />
			</div>
			<div class="form-group col-md-4">
				<label for="province">State</label>
				<select id="provice" name="province" class="form-control" required>
					<option selected>Choose...</option>
					<option value="Uusimaa">Uusimaa</option>
					<option value="etc">etc...</option>
				</select>
			</div>
			<div class="form-group col-md-2">
				<label for="zipcode">Zip code</label>
				<input type="text" class="form-control" name="zip" id="zipcode" placeholder="01530" required />
			</div>
		</div>
		<h4>Areas of expertise <span class="btn btn-secondary btn-sm fas fa-plus-circle add-exp float-right"></span></h4>
		<div class="expertise-parent">
			<div class="form-group expertise-field">
				<input type="text" name="expertise[]" class="form-control" id="expertise" placeholder="Microsoft Visual Studio" required />
			</div>
		</div>

		<h4>Personal skills <span class="btn btn-secondary btn-sm fas fa-plus-circle add-skill float-right"></span></h4>
		<div class="skills-parent">
			<div class="form-group skills-field">
				<input type="text" name="skills[]" class="form-control" id="skills" placeholder="Focused" required />
			</div>
		</div>

		<div class="form-group">
			<label for="pSummary">Personal Summary</label>
    		<textarea class="form-control" name="pSummary" id="pSummary" rows="5"></textarea>
		</div>

		<div class="form-group">
			<label for="wExperience">Work experience</label>
    		<textarea class="form-control" name="wExperience" id="wExperience" rows="5"></textarea>
		</div>

		<div class="form-group">
			<label for="references">References</label>
    		<textarea class="form-control" name="references" id="references" rows="3"></textarea>
		</div>

		<div class="form-group">
			<input type="hidden" name="date" value="<?php echo date('d.m.Y')?>" />
			<button class="btn btn-primary btn-sm" type="submit">Create</button>
		</div>
	</form>
	<div class="col-md-12" id="previewjson"></div>
</div>