<?php
if(isset($_POST['send'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email) {
        $to = 'me@example.com';
        $from = 'webmaster@example.com';
        $subject = 'commentform';
        $message = 'Form:' . $_POST['name'] . "\r\n\r\n";
        $message .= 'comments:' . $_POST['comments'];
        $headers = "From:$from\r\nReply-to:$email";
        $sent =mail($to, $subject, $message, $headers);
        if ($sent) {
            $result = 'Your message have been sent';

        }

    } else {

    }
        $result='Sorry,there was a problem.';
}