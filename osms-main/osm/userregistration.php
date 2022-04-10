<?php


include('dbConnection.php');
if(isset($_REQUEST['rSignUp']))
{
   if(($_REQUEST['rName'] == "") || ($_REQUEST['rEmail'] == "") || ($_REQUEST['rPassword'] == ""))
   {
     $regmsg = '<div class ="alert alert-warning m-2 text-center"role="alert">All Field are required.</div>';
   } 
    else
    {
       $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email= '".$_REQUEST['rEmail']."'";

       $result = $conn->query($sql);

          if($result->num_rows==1) 
            {
               $regmsg = '<div class ="alert alert-danger m-2 text-center"role="alert">Email Id Already Registered</div>';
            }
          else
          {
             $rName = $_REQUEST['rName'];
             $rEmail = $_REQUEST['rEmail'];
             $rPassword = $_REQUEST['rPassword'];

             $sql = "INSERT INTO requesterlogin_tb(r_name, r_email, r_password) VALUES ('$rName', '$rEmail', '$rPassword')";

                if($conn->query($sql) == TRUE)
                  {
                    $regmsg = '<div class ="alert alert-success m-2 text-center"role="alert">Account Successfully Created</div>';
                  }
                else
                  {
                   $regmsg = '<div class ="alert alert-danger m-2 text-center"role="alert">Unable to Create Account</div>';
                  }

          }

     }

}



?>



<!----start registration----->
<div class="container4 pt-5"  id="registration" >
  	<h2 class="text-center text-white">Create An Account</h2>
  	<div class="row mp-4 mb-4">
  		<div class="col-md-6 offset-md-3">
  			<div class="medow">
  			<form action="" class="mino" method="POST">
  				<div class="madee">
  			<div class="form-group">
  				<i class="fa-solid fa-user"></i> <label for="name" class="font-weight-bold pl-2">Name</label><input type="text" class= "form-control" placeholder="Name" name="rName">
  			</div>
  			<div class="form-group">
  				<i class="fa-solid fa-envelope"></i> <label for="email" class="font-weight-bold pl-2">E-Mail</label><input type="text" class= "form-control" placeholder="E-Mail" name="rEmail">
  				<small class="form-text">Pssst....we will never share your email with anyone.</small>
  			</div>
  			<div class="form-group">
  				<i class="fa-solid fa-key"></i> <label for="password" class="font-weight-bold pl-2">Password</label><input type="text" class= "form-control" placeholder="Password" name="rPassword">
  			</div>
  			<button type="submit" class="btn12 btn-danger mt-5 w-50 font-weight-bold"name="rSignUp">Sign Up</button>

        <?php if(isset($regmsg)){echo $regmsg;} ?>
      
  			</div>
        
  			</form>

  		</div>
  		</div>
  	</div>
  	
  </div>
<!----end registration----->