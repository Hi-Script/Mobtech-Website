<?php 

    if(isset($_POST["save"])){
    	$name = $_POST["first_name"];
    	$email = $_POST["email"];
    	$mg = $_POST["project"];

    	$mailto = "mobtech191@gmail.com";
    	$subject = "Form Submission";
    	$message= "Name = " . $name . "\n\nEmail = " . $email . "\n\nMessage = " . $mg;
    	$headers= "From: ". $email;

        $result = mail($mailto, $subject, $message, $headers);


    	if($result){
    		echo "<h1>Sent Successfully! Thank you"." ". $name . ", We will contact you shortly</h1>";

    	}
    	else{
    		echo "Message not sent, please try again!";
    	}

    }
?>