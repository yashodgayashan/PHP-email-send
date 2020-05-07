# PHP-email-send

### Dependencies used

For this project I have used [PHPMailer](https://github.com/PHPMailer/PHPMailer/tree/5.2-stable) 5.2-stable as a dependency.

### Mail configurations

```sh
    // Create a new PHPMailer object.
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';

    // SMTP host.
    $mail->Host = 'smtp.gmail.com';
    // SMTP port.
    $mail->Port = '465';
    $mail->isHTML();

    // Add email of the SMTP account.
    $mail->Username = '<email>';

    // Add password of the SMTP account
    $mail->Password = '<password>';
    $mail->SetFrom('<email>','<Name>');

    // Add email subject.
    $mail->Subject = "$subject";

    // Add email body.
    $mail->Body = "$message";

    // Add senders' address.
    $mail->AddAddress("$email");

    // Send the email address.
    $result = $mail->Send();
```
