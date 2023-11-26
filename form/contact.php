<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $sub=$_POST['subject'];
        $mess=$_POST['message'];


        $to='sudheshholla15@gmail.com';
        $subject='Form Submission';
        $message="Name :".$name."\n"."Email id :".$email."\n"."Subject:"."\n".$sub."\n"."Message sent :"."\n".$mess;
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "<center><h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1><a href=index.html style=text-decoration:none><h1>Back to Home</h1></a></center>";
        }
        else{
            echo "Something went wrong!";
        }
    }
?>
