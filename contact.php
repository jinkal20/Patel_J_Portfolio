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
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/foundation.css">
	<title>Contact Us</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body id="contact">
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
	<div class="container">
	<div class="row">
        <div class="small-2 large-2 columns"><img src="images/about.png"></div>
        <div class="small- text-centered large-2 columns ">Contact</div>
        </div>
	<form action="sendemail.php" method="POST">
		<?php  foreach ($fields as $field_name => $field_config):?>
		<label  id="text" for="<?php echo $field_name;?>"><?php echo $field_config['label'];?></label>
		<input class="field" id="<?php echo $field_name;?>" type="<?php echo $field_config['type'];?>" name="<?php echo $field_name;?>">
	<?php endforeach;?>
	<br>
	<button onclick="closeWin()">Home</button>
	<button type="submit" id="btn">Submit</button>
	</form>
	</div>
	<script src="js/close.js"></script>
</body>
</html>