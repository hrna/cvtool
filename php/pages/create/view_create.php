<div class="col-md-12" id="create">
	<form>
		<h4>Personal details</h4>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="fullName">Full name</label>
				<input type="text" name="fullName" class="form-control" id="fullName" placeholder="Mikko Mallikas" />
			</div>
			<div class="form-group col-md-6">
				<label for="email">Email</label>
				<input type="text" name="email" class="form-control" id="email" placeholder="email@address.com" />
			</div>
		</div>
		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" name="address" class="form-control" id="address" placeholder="Kotitie 3 B2" />
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="city">City</label>
				<input type="text" name="city" class="form-control" id="city" placeholder="Vantaa" />
			</div>
			<div class="form-group col-md-4">
				<label for="province">State</label>
				<select id="provice" name="province" class="form-control">
					<option selected>Choose...</option>
					<option value="Uusimaa">Uusimaa</option>
					<option value="etc">etc...</option>
				</select>
			</div>
			<div class="form-group col-md-2">
				<label for="zipcode">Zip code</label>
				<input type="text" class="form-control" id="zipcode" placeholder="01530" />
			</div>
		</div>
		<h4>Areas of expertise <span class="btn btn-secondary btn-sm fas fa-plus-circle add"></span></h4>
		<div class="input-parent">
			<div class="form-group expertise-field">
				<input type="text" name="expertise[]" class="form-control" id="expertise" placeholder="Microsoft Visual Studio" />
			</div>
		</div>
	</form>
</div>