<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SendMail</title>
</head>

<body>
    <h2>Gửi Email điểm danh</h2>
    <form action="sendMail.php" method="post">
        Email <input type="email" name="email" value=""> <br><br>
        Subject <input type="text" name="subject" value=""> <br><br>
        Message <input type="text" name="message" value=""> <br><br>
        <button type="submit" name="send">Send</button>
    </form>
</body>

</html>
<!-- 
<
    ?php
include("")
$emailServer = new MyEmailServer();
$emailSender = new EmailSender($emailServer);
$emailSender->send("example@example.com", "Test Email", "This is a test email.");
?> 
-->
