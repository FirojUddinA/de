
<?php

if(isset($_POST['name'])&& isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['phone'];
    $message = $_POST['message'];
    $to = 'shohag14748@gmail.com';
    $body = " <html>
<body>
<h2>Message From The serramart.com.mx </h2>
<hr>
<p>Name :'.$name.'</p>
<p> Email :'.$email.'</p>
<h3>Message</h3>
<p>'.$message.'</p>
</body>
</html>";
$headers = "Form: ".$name."<".$email.">\r\n";
$headers .= "Reply-To: ".$email."\r\n";
$headers .= "Content-type: text/html; charset-utf-8";
$send = mail($to,$subject,$body,$headers);
}



header('Location: http://serramart.com.mx/contact.html');
exit;