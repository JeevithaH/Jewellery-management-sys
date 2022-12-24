<?php
use Mpdf\Tag\Time;
   include('../../config/pdoconfig.php');
   $alert="";
            use PHPMailer\PHPMailer\PHPMailer;

            require_once 'phpmailer/Exception.php';
            require_once 'phpmailer/PHPMailer.php';
            require_once 'phpmailer/SMTP.php';
            $mail = new PHPMailer(true);
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $department = $_POST['department'];
   $sql = "SELECT * FROM login WHERE email = '$email'";
   $statement = $connection->prepare($sql);
   $statement->execute();
   $result = $statement->fetchall();
   if($result){
       $alert = "user exists";
   }
   else{
    $md5 = md5(Time());
    $sql = "INSERT INTO `login` (`name`, `email`, `user`, `password`, `md5`, `time`) VALUES ('$name', '$email', 'user', '$password', '$md5', current_timestamp())";
       $statement = $connection->prepare($sql);
       $result = $statement->execute();
       if($result){
        try{
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'kushvithchinna900@gmail.com'; // Gmail address which you want to use as SMTP server
            $mail->Password = 'fpieluceaabeqvwb'; // Gmail address Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = '587';
        
            $mail->setFrom($email); // Gmail address which you used as SMTP server
            $mail->addAddress($email); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
        
            $mail->isHTML(true);
            $mail->Subject = 'Message From Jewel Management';
            $mail->Body = "<h3>Your Accounted is created by <b>ADMIN</b> <br> 
            <br> Your Account Crentials<br>
            Email : $email<br>
            Password : $password<br>
            User:user</h3>";
        
            $mail->send();
            $alert =  "success";
          } catch (Exception $e){
            $alert = '<div class="alert alert-danger">
                        <span>'.$e->getMessage().'</span>
                      </div>';
                      
          }
       }

   }
   echo $alert;
?>