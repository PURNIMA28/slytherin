<?php
if(isset($_POST['feedback'])){
    // echo 'hello';
    $name=$_POST['name'];
    $mail=$_POST['email'];
    $phone=$_POST['tel'];
    $add=$_POST['message'];
    $to = "purnimakushwaha28@gmail.com";
$subject = "Feedback from Students";
$message="Name:$name<br/>
E-mail:$mail<br/>
Contact Number:$phone<br/>
Batch:$batch</br>
Branch:$branch<br>

Message:$message";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <kushwahapurnima28@gmail.com>' . "\r\n";
$mail_status=mail($to,$subject,$message,$headers);
if($mail_status == true){?>
 <script language="javascript" type="text/javascript">
  alert('Thank you for the message. We appreciate your honest feedback.');
  
   </script>
  <?php
 
}else{?>
 <script language="javascript" type="text/javascript">
  alert('Something went wrong! Please try again later.');

   </script>
<?php
}
}
