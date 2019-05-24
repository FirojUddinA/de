<?php 

if(isset($_POST['name'])&& isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = "Contact request";
    $message = $_POST['message'];
    $to = 'firoj.uddin2580@gmail.com';
    $body = ' <html>
                <body>
                    <h2>Message From The Outcome Network</h2>
                    <hr>
                    <p>Name :'.$name.'</p>
                    <p> Email :'.$email.'</p>
                    <p> Phone :'.$phone.'</p>
                    <h3>Message</h3>
                    <p>'.$message.'</p>
                </body>
            </html>';
    $headers = "Form: ".$name."<".$email.">\r\n";
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "Content-type: text/html; charset-utf-8";
    $send = mail($to,$subject,$body,$headers);
}

header('Location:https://firojuddina.github.io/de/contact.html');
exit;

?>