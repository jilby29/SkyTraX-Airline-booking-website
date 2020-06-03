<!DOCTYPE html>
<html>

	<body>
	
		<form id="form_1">
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label for="firstname">Firstname</label>
						  <input type="text" class="form-control" id="firstname" placeholder="Firstname">
						</div>
						<div class="form-group col-md-6">
						  <label for="surname">Surname</label>
						  <input type="text" class="form-control" id="surname" placeholder="Surname">
						</div>
					  </div>
					  
					  <div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="male" name="male" class="custom-control-input">
					  <label class="custom-control-label" for="male">Male</label>
					</div>
					
					<div class="custom-control custom-radio custom-control-inline form-group">
					  <input type="radio" id="female" name="female" class="custom-control-input">
					  <label class="custom-control-label" for="female">Female</label>
					</div>
					  <div class="form-group">
						<label for="date">DOB</label>
						<input type="date" class="form-control" id="date">
					  </div>
					  <div class="form-group">
						  <label for="meal">Meal Choice</label>
						  <select id="meal" class="form-control">
							<option selected>Choose...</option>
							<option>yes</option>
							<option>no</option>
						  </select>
					  </div>
					 
					  <button type="submit" class="btn btn-primary">Sign in</button>
					
					</form>

	</body>

</html>