<?php
if (isset($_POST['submit'])) {
$to = 'admin@mywebsite.com';
$subject = $_POST['subject'];
$message = $_POST['body'];
$from = $_POST['from'];
$headers = 'From: ' . $from . "\r\n" .
'Reply-To: ' . $from . "\r\n" .
'X-Mailer: PHP/' . phpversion();
//($to, $subject, $message, $headers);
var_dump($to,$subject,$message,$from,$headers);
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="" method="POST">
From: <input type="text" name="from"><br>
Subj: <input type="text" name="subject"><br>
Mail: <textarea name="body"></textarea><br>
<input type="submit" name="submit">
</form>
</body>
</html>