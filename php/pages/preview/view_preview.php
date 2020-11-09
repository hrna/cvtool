
<div class="col-md-12 border" id="preview">

	<div class="row col-md-12">
		<div class="col-md-6 text-left"><small>Curriculum Vitae</small></div>
		<div class="col-md-6 text-right"><small><?php echo $_SESSION['formdata']['date']?></small></div>
	</div>
    <div class="col-md-12 text-center">
        <p>
            <h1><?php echo $_SESSION['formdata']['fullName']?></h1> <br /> 
            <span class="fas fa-birthday-cake"></span> <?php echo $_SESSION['formdata']['dob']?> <br />
            <span class="fas fa-address-card"></span> <?php echo $_SESSION['formdata']['address'].', '.$_SESSION['formdata']['city'].' '.$_SESSION['formdata']['zip']?><br />
            <span class="fas fa-phone-alt"></span><?php echo $_SESSION['formdata']['phone']?><br />
            <span class="fas fa-at"></span> <?php echo $_SESSION['formdata']['email']?>
        </p>
    </div>
    
    <div class="row col-md-12">
        <table class="table table-borderless">
            <thead>
                <th scope="col" width="20%">Areas of expertise</th>
                <th scope="col"></th>
            </thead>
            <tbody>
				<?php foreach ($_SESSION['formdata']['expertise'] as $expert):?>
                <tr>
                    <td scope="col"></td>
                    <td scope="col" class="text-left"><li><?php echo $expert?></li></td> 
                </tr>
				<?php endforeach;?>
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
				<?php foreach($_SESSION['formdata']['skills'] as $skill):?>
				<tr>
					<td scope="col"></td>
					<td scope="col" class="text-left"><li><?php echo $skill?></li></td> 
				</tr>
				<?php endforeach;?>
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
					<td scope="col" class="text-left"><?php echo nl2br($_SESSION['formdata']['pSummary'])?></td> 
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
					<td scope="col" class="text-left"><?php echo $_SESSION['formdata']['wExperience']?></td> 
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
					<td scope="col" class="text-left"><?php echo $_SESSION['formdata']['references']?></td> 
				</tr>
			</tbody>
		</table>
    </div>
</div>

<div class="row col-md-12">
	<div class="row col-md-3">
		<a href="<?php echo $util->formLink('handler/pdf')?>" class="btn btn-sm btn-primary">PDF</a>
	</div>
</div>