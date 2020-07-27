<?php

  
  $name = trim(strip_tags($_POST['name']));
  $email = trim(strip_tags($_POST['email']));
  $subject = trim(strip_tags($_POST['subject']));
  $message = htmlentities($_POST['message']);
      
  $to      = 'info@ditsepo.co.za';
  $body    = $message;
  
  $headers = "From: ".$email ;
  
  mail($to,$subject,$message,$headers);
  
  
  /* Reply Email... */
  
  $client_email  = $email;

 $email_subject  = "Reply to your email.";
 $headers  = "MIME-Version: 1.0" . "\r\n";
 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 $headers .= 'From: Ditsepo Solutions <info@ditsepo.co.za>' . "\r\n";
  
$message = '
<html>
<head> 
	<link href="https://fonts.googleapis.com/css?family=Hanalei" rel="stylesheet">

</head>
<body>

	<div style="background-color:#0A1B2A;">
		<h2 style="font-size:35px; text-align:center; color:#d1cf27;">DITSEPO SOLUTIONS</h2>
	</div>
	
	<div style="color:#0A1B2A; padding-left:10px;">
		<p> Good day '.$_POST["name"] .' <br><br> We have received your email request. <br><br> One of our staff will contact your shortly. <br><br> Kind Regards. <br> Ditsepo Solutions.</p> 
	</div>
	
		<div style="background-color:#d1cf27; padding-left:10px;">
		<table><tr>
			<td><p style="color:#0A1B2A;"> Info Email : info@ditsepo.co.za</p></td>
		
				<td><p style="color:#0A1B2A;"> Help Desk Email : helpdesk@ditsepo.co.za </p></td> </tr>
			<tr>
				<td><p style="color:#0A1B2A;"> Contact Number : +27 84 504 3069  </p></td>
				<td><p style="color:#0A1B2A;"> Website : www.ditsepo.co.za </p></td>
			</tr>
		</table>
		</div>
	 
</body>
</html> ';
  
  mail($client_email,$email_subject,$message,$headers); 
  header('Location:index.html');
?>
  
  
                          