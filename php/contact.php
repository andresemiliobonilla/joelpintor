<?php

$field_first_name = $_POST['contact_names'];

$field_email = $_POST['contact_email'];

$field_phone = $_POST['contact_phone'];

$field_message = $_POST['contact_message'];

$mail_to = 'andresb2028@gmail.com';

$subject = 'Message from a site visitor '.$field_first_name;

$body_message = 'From: '.$field_first_name."\n";

$body_message .= 'E-mail: '.$field_email."\n";

$body_message .= 'Phone: '.$field_phone."\n";

$body_message .= 'Message: '.$field_message."\n";

$headers = 'From: '.$field_email."\r\n";

$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);


if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		window.location = 'index.html';
	</script>
<?php
}
?>