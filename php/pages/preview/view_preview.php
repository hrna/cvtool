
<?php if (!empty($_SESSION['formdata'])):?>
<div class="col-md-12" id="preview">

	<div class="row col-md-12">
		<div class="col-md-6 text-left"><small>Curriculum Vitae</small></div>
		<div class="col-md-6 text-right"><small><?php echo $_SESSION['formdata']['date']?></small></div>
	</div>
    <div class="col-md-12 text-left">
        <p>
            <h2><?php echo $_SESSION['formdata']['fullName']?></h2> <small>
			dob:  <?php echo $_SESSION['formdata']['dob']?> <br />
			address: <?php echo $_SESSION['formdata']['address'].', '.$_SESSION['formdata']['city'].' '.$_SESSION['formdata']['zip']?><br />
            tel. <?php echo $_SESSION['formdata']['phone']?><br />
            email: <?php echo $_SESSION['formdata']['email']?></small>
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
					<td scope="col" class="text-left"><?php echo nl2br($_SESSION['formdata']['wExperience'])?></td> 
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
		<a href="<?php echo $util->formLink($config->home.'handler/pdf')?>" class="btn btn-sm btn-primary">PDF</a>
	</div>
</div>

<?php endif;?>