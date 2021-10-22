<html>
<head>
	<title>Aliens Abducted Me - Report an Abduction</title>
</head>
<body>
	<h2>Aliens Abducted Me - Report an Abduction</h2>
<?php
$when_it_happend = $_POST['whenithappend'];
$how_long = $_POST['howlong'];
$number = $_POST['howmany'];
$alien_description = $_POST['aliendescription'];
$they_did = $_POST['whattheydid'];
$fang_spotted = $_POST['fangspotted'];
$email = $_POST['email'];

$to = 'horsescary@gmail.com';
$subject = 'Aliens Abducted Me - Abduction Report';
$msg = "$name was abducted $when_it_happend and was gone for $howlong.\n" .
        "Number of aliens: $how_many\n" .
        "What they did: $what_they_did\n" .     
        "Fang spotted: $fang_spoted\n" .
        "Other comments: $other";

mail($to, $subject, $msg, 'From:' . $email);

echo 'Thanks for submitting the form.<br />';
echo 'You were abducted ' . $when_it_happend;
echo ' and were gone for ' . $how_long . '<br />';
echo 'Number of aliens: ' . $number . '<br />';
echo 'Describe them: ' . $alien_description . '<br />';
echo 'The aliens did this: ' . $they_did . '<br />';
echo 'Was Fang there? ' . $fang_spotted . '<br />';
echo 'Your email address is ' . $email;
?>
</body>
</html?
