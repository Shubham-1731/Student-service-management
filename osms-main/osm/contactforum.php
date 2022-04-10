<?php

if(isset($_REQUEST['submit'])) {

 if(($_REQUEST['name'] == "") || ($_REQUEST['subject'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['message'] == "")){


  $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  
 } else {
 $name = $_REQUEST['name'];
 $subject = $_REQUEST['subject'];
 $email = $_REQUEST['email'];
 $message = $_REQUEST['message'];

 $mailTo = "mehulpradhan2001@gmail.com";
 $headers = "From: ". $email;
 $txt = "You have received an email from ". $name. ".\n\n".$message;
 mail($mailTo, $subject, $txt, $headers);
 $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Sent Successfully </div>';

}
}
?>








            <div class="contactwala">
            <form action="" class="contactwala" method="POST" >
                <input type="text" class= "form-control" name="name" placeholder="Name"><br>
                <input type="text" class= "form-control" name="subject" placeholder="Subject"><br>
                <input type="text" class= "form-control" name="email" placeholder="E-Mail"><br>
                <textarea class="form-control" name="message" placeholder="How can we Help You?" style="height: 150px;"></textarea><br>
                <input type="submit" class="btn22" value="Send" name="Submit">
            </form>
            </div>
