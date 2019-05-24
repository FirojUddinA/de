<?php 

if(isset($_POST['first_name'])&& isset($_POST['email'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $subject = "Contact request";
    $message = $_POST['comments'];
    $to = 'firoj.uddin2580@gmail.com';
    $body = ' <html>
                <body>
                    <h2>Message From The Outcome Network</h2>
                    <hr>
                    <p>First Name :'.$first_name.'</p>
                    <p>Last Name :'.$last_name.'</p>
                    <p> Email :'.$email.'</p>
                    <p> Phone :'.$telephone.'</p>
                    <h3>Message</h3>
                    <p>'.$message.'</p>
                </body>
            </html>';
    $headers = "Form: ".$name."<".$email.">\r\n";
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "Content-type: text/html; charset-utf-8";
    $send = mail($to,$subject,$body,$headers);
}

header('Location:http://serramart.com.mx/contact.html');
exit;

?>