<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];

$mail_to = 'spectrummagicus@gmail.com';
$subject = 'Message from a site visitor'.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Retard, you really think that this contact form actually works?');
		//window.location = 'contact_page.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed do to a zombie apocolypse. Please, send an email to spectrummagicus@gmail.com if you still have a question about magic supplies in despite your likely death');
		//window.location = 'contact_page.html';
	</script>
<?php
}
?>