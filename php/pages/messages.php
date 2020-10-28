<?php
	$messages = $util->getMessages();

	$icons = Array(
		'alert-info' => 'fa-info-circle',
		'alert-success' => 'fa-check-circle',
		'alert-warning' => 'fa-exclamation-triangle',
		'alert-danger' => 'fa-ban'
	);
?>

<?php if(!empty($messages)):?>
	<?php foreach($messages as $message): ?>
		<div class="col message">
			<div class="alert <?php echo $message['type']?> borders" role="alert">
				<i class="fas <?php echo $icons[$message['type']]?>"></i>
				<span>
					<?php echo $message['message']?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span>
					</button>
				</span>
			</div>
		</div>
	<?php endforeach;?>
<?php endif;?>
