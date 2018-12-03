<?php
	function send_email(){
		if(empty($_POST['email'])){
			header('Locaion:contact.php?status=error');
		}
		if(!isset($_POST['message']) || !isset($_POST['email'])){
			header('Location:contact.php');
			exit();
		}
		$to= 'jinkalp287@gmail.com';
		$subject = 'Email from week 12';
		$message = 'Message Body:'.$_POST['Message'];
		$headers = "From: no-reply@jinkalpatel.com\r\n";
		$headers .= 'Reply-To:'.$_POST['email'];

		if(mail($to,$subject,$message,$headers)){
			header('Locaion:contact.php?status=succesfull');
		}else{
        	echo 'something wrong';
        }

		
		//mail($to,$subject,$message);
	}
	send_email();
?>	