 <?php
	require 'src/PHPMailer.php';
	require 'src/SMTP.php';
	require 'src/Exception.php';
 
    use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer();

    $mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "tls";
	$mail->Port = "587";
	$mail->Username = "sparksdonation24@gmail.com";
	$mail->Password = "Sparks@donation123";

    $mail->Subject = "Test email using PHPMailer";
    $mail->setFrom('sparksdonation24@gmail.com', 'THE SPARKS DONATION');
    $mail->isHTML(true);
	$mail->Body = "<h1>This is HTML h1 Heading</h1></br><p>This is html paragraph</p>";
	$mail->addAddress($_POST['d-email']);
    $mail->send();
    $mail->smtpClose();
?> 