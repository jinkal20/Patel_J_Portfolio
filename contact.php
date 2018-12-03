<?php
	$fields = array(
		'name'=>array(
			'type'=>'text',
			'label'=>'Name'
			),
		'email'=>array(
			'type'=>'email',
			'label'=>'Email'
			),
		'phone'=>array(
			'type'=>'tel',
			'label'=>'Phone'
			),
		'message'=>array(
			'type'=>'textarea',
			'label'=>'Message'
			)
		);
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
	<?php
	if(isset($_GET['status']) && $_GET['status'] === 'succesfull'):?>
	<div class="alert alert-succes" role="alert">
	<p>The form is submitted</p>
	</div>
	<?php endif;?>

	<?php
	if(isset($_GET['status']) && $_GET['status'] === 'error'):?>
	<div class="alert alert-error" role="error">
	<p>The form is not submitted require fields</p>
	</div>
	<?php endif;?>

	<form action="sendemail.php" method="POST">
		<?php  foreach ($fields as $field_name => $field_config):?>
		<label for="<?php echo $field_name;?>"><?php echo $field_config['label'];?></label>
		<input id="<?php echo $field_name;?>" type="<?php echo $field_config['type'];?>" name="<?php echo $field_name;?>">
	<?php endforeach;?>
	<button type="submit">Submit</button>
	</form>
</body>
</html>