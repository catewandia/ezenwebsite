<?php

    if(isset($_POST['usemail'])){
        $name = $_POST['username'];
        $email = $_POST['usemail'];
        //$phone = $_POST['phone'];
       // $quantity = $_POST['quantity'];
       // $weight = $_POST['weight'];
        $from = $_POST['usemail'];
        $to = $_POST['email'];
      //  echo "sending message";
        $formcontent="Sender: Name $name \n Phone Number:  $phone
            \n Product Quantity: $quantity  Package(s) \n Product Weight: $weight Kg(s) \n From: $from \n To: $to";
        $recipient = "hanncock98@gmail.com";
        $subject = "Quote Request";
        $mailheader = "From: $email \r\n";
        mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
        echo header("Location:thankyou.php");
        
    }
    
   /* if(isset($_POST['contact'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $from = $_POST['email'];
        $to = 'dev@ezenfinancials.com';
        $formcontent = "Sender: $name \n From: $from \n To: $to ";
        $recipient = 'hanncock98@gmail.com';
        $subject = 'More information on product';
        $mailheader = "From: $email \r\n";
        mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
        echo header("Location:thankyou.php");
    }*/
	if(isset($_POST['message'])){
		$subject= $_POST['message'];
        $recipient = 'hanncock98@gmail.com';
        $formcontent = $_POST['message'];
        $email = 'dev@ezenfinancials.com';
      //  $mailheader = 'From: .$email';
        mail($recipient, $subject, $formcontent, $email) or die("Error!");
        echo header("Location:thankyou.php");
        
        $to = "hanncock98@gmail.com";
        $subject = "My subject";
        $txt = $_POST['message'];
        $headers = "From:info@ezenfinancials.com" . "\r\n" .
        "CC: somebodyelse@example.com";
        
        mail($to,$subject,$txt,$headers) or die("Error!");
	    echo header("Location:thankyou.php");
	    
	}
	
	if(isset($_POST['email'])){
	       $recipient = $_POST['email'];
        $subject = $_POST['name'];
        $email = 'dev@ezenfinancials.com';
        $formcontent = $_POST['message'];
        $mailheader = "From: .$email";
        "CC: somebodyelse@example.com";
        
        mail($recipient,$subject,$formcontent,$email) or die("Error!");
	    echo header("Location:thankyou.php");
	    
	}
	
    /*if(isset($_POST['name'])){
	    $to = "ochieng@ezenfinancials.com";
        $subject = $_POST['subject'];
        $txt = $_POST['subject'];
        $headers = "From: dev@ezenfinancials.com" . "\r\n" .
        "CC: somebodyelse@example.com";
        
        mail($to,$subject,$txt,$headers) or die("Error!");
	    echo header("Location:thankyou.php");
	    
	}*/
?>