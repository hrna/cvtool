

<div class="col-md-12 border" id="preview"></div>


<script id="preview-template" type="text/x-handlebars-template">
	<div class="row col-md-12">
		<div class="col-md-6 text-left"><small>Curriculum Vitae</small></div>
		<div class="col-md-6 text-right"><small>{{date}}</small></div>
	</div>
    <div class="col-md-12 text-center">
        <p>
            <h1>{{fullName}}</h1> <br /> 
            <span class="fas fa-birthday-cake"></span> {{dob}} <br />
            <span class="fas fa-address-card"></span> {{address}}, {{city}} {{zip}} <br />
            <span class="fas fa-phone-alt"></span> {{phone}} <br />
            <span class="fas fa-at"></span> {{email}}
        </p>
    </div>
    
    <div class="row col-md-12">
        <table class="table table-borderless">
            <thead>
                <th scope="col" width="20%">Areas of expertise</th>
                <th scope="col"></th>
            </thead>
            <tbody>
				{{#each expertise}}
                <tr>
                    <td scope="col"></td>
                    <td scope="col" class="text-left"><li>{{this}}</li></td> 
                </tr>
				{{/each}}
            </tbody>
        </table>
	</div>
    <div class="row col-md-12">
		<table class="table table-borderless">
			<thead>
				<th scope="col" width="20%">Personal skills</th>
				<th scope="col"></th>
			</thead>
			<tbody>
				{{#each skills}}
				<tr>
					<td scope="col"></td>
					<td scope="col" class="text-left"><li>{{this}}</li></td> 
				</tr>
				{{/each}}
			</tbody>
		</table>
	</div>
    <div class="row col-md-12">
		<table class="table table-borderless">
			<thead>
				<th scope="col" width="20%">Personal Summary</th>
				<th scope="col"></th>
			</thead>
			<tbody>
				<tr>
					<td scope="col"></td>
					<td scope="col" class="text-left">{{pSummary}}</td> 
				</tr>
			</tbody>
		</table>
    </div>
    <div class="row col-md-12">
		<table class="table table-borderless">
			<thead>
				<th scope="col" width="20%">Work Experience</th>
				<th scope="col"></th>
			</thead>
			<tbody>
				<tr>
					<td scope="col"></td>
					<td scope="col" class="text-left">{{wExperience}}</td> 
				</tr>
			</tbody>
		</table>
    </div>
    <div class="row col-md-12">
		<table class="table table-borderless">
			<thead>
				<th scope="col" width="20%">References</th>
				<th scope="col"></th>
			</thead>
			<tbody>
				<tr>
					<td scope="col"></td>
					<td scope="col" class="text-left">{{references}}</td> 
				</tr>
			</tbody>
		</table>
    </div>
</script>

<script language="JavaScript" type="text/javascript">
        	var postData = <?php echo $data?>;
</script>