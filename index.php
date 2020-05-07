<?php 
    // Added the dependency
    require_once('lib/PHPMailer/PHPMailerAutoload.php');
    
    if(isset($_POST["submit"])){

        // Get name.
        $name = $_POST["userName"];

        // Get email.
        $email = $_POST["userEmail"];

        // Get subject.
        $subject = $_POST["subject"];

        // Get message.
        $message = $_POST["message"];

        // Get subject.
        $subject = $_POST["subject"];

        // Use PHPMailer class.
        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '465';
        $mail->isHTML();

        // Add email of the account.
        $mail->Username = '<email>';

        // Add password of the account
        $mail->Password = '<password>';
        $mail->SetFrom('<email>','<Name>');

        // Add subject.
        $mail->Subject = "$subject";
    
        // Add message.
        $mail->Body = "$message";
        
        // Add senders' address.
        $mail->AddAddress("$email");
        $result = $mail->Send();
        if($result == 1){
            header("Location: index.php");
        } else {
            echo "Sorry. Failure Message";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <title>Email</title>
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
        }
        .form-container{
            border:2px solid #cecece;
            margin:20px 0;
        }
        .button-container{
            margin:10px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">Email</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3 "></div>
        <div class="col-sm-12 col-md-6 col-lg-6 ">

        <form action="index.php" method="POST" style="margin:20px;padding:20px;">
            <h4>Send Email</h4>
            <div class="form-group">
                <label for="name">Name :</label>
                <input name="userName" type="text" class="form-control" placeholder="Enter Name" id="name">
            </div>
            <div class="form-group">
                <label for="email">Email address :</label>
                <input name="userEmail" type="email" class="form-control" placeholder="Enter email" id="email">
            </div>
            <div class="form-group">
                <label for="subject">Subject :</label>
                <input name="subject" type="text" class="form-control" placeholder="Enter Subject" id="subject">
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <input name="message" type="text" class="form-control" placeholder="Enter Message" id="message">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 "></div>
    </div>
    <div class="footer">
        <p>Copyright 2020 Todolist</p>
    </div>
</body>
</html>

