<?php
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fleet Hudma</title>
<link rel="icon" href="images/faveicon.png" type="image/png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/selectoption.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<![endif]-->



 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="validation/jquery.validate.min.js"></script> 



 
<script type="text/javascript">
/**
  * Basic jQuery Validation Form Demo Code
  * Copyright Sam Deering 2012
  * Licence: http://www.jquery4u.com/license/
  */
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#register-form").validate({
                rules: {
				 type: {
                        required: true, 
                    },
                    
                    email: {
                        required: true, 
						minlength: 8
                    },
					 
					   pwd: {
                         required: true, 
                        minlength: 4
                    },
					 
                   
                },
                messages: {
                    
					email: {
                       required  : "Please enter  email", 
                    }, 
					 
					 pwd: {
                       required  : "Please enter a password",
                        minlength: "Inavalid Email/Password"
                    }, 
                     
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
</script>


</head>

<body>


<style>

#register-form .inputrow  label.error {
    color:#CC0000;
    display: inline-block;
    margin: 4px 0 5px 10px;
    padding: 0;
    text-align: left;
	font-size:12px; 
}
</style>


<section class="wrapermain">


 <form action="" method="post" enctype="multipart/form-data" id="register-form" novalidate="novalidate" name="abc">

<div class="organisationbody organisationbody2">

<div class="container">
<h3>WELCOME TO <span>PRANETOR FLEET</span> MANAGEMENT</h3>
<div class="caption-container caption-containerfour">
	<div class="registerformmain organisationmain">
                <div class="formbg">
                <h2><i class="fa fa-lock" aria-hidden="true"></i> &nbsp;MEMBER LOGIN</h2>
            
                <fieldset>
                 
                <div class="organisationinputrow">
                <div class="inputrow">
                    <label for="type">Type *</label>
                    <div class="inputtype">
                        <select name="type" class="form-control">
                                                <option value="">Type</option>
                                                <option value="Admin">Admin</option>
												  <option value="driver">driver</option>
                                                  <?php 
	  

include 'db1.php';
	  $q=mysql_query("select * from subuser");
$q1=mysql_num_rows($q);
  while($row=mysql_fetch_array($q))
  { 
     echo "<option value=$row[usertype]> $row[usertype]</option>";
}
	  
	    
	   ?>
 						
                                            </select>
                </div>
                </div> 
                
                </div>
                
                
                <div class="organisationinputrow">
                <div class="inputrow">
                    <label for="email">Email Id *</label>
                    <div class="inputtype">
                    	<input type="email" class="form-control" placeholder="" name="email">
                    </div>
                
                </div>
                </div>
                
                <div class="organisationinputrow">
                <div class="inputrow">
                    <label for="pwd">Password *</label>
                    <div class="inputtype">
                    	<input type="password" class="form-control" placeholder="" name="pwd">
                        
                    </div>
                <small>Forgot Password ?</small>
                </div>
                
                
                </div>
                 
                <div class="inputrow">
				  <input type="submit" name="submit" class="btn btn-default" value="LOGIN"> 
          
                    <a href="index.php" class="goback">go back</a>
                </div>
                
                          
                </fieldset>
           
                
                
                </div>
                </div>
                </div>
                </div>

</div>
     </form>
 

</section>

  
   
<?php 
	if(isset($_POST['submit']))
	{ 
	 
	 $type=$_POST['type'];
	 $email=$_POST['email']; 
	 $pwd=$_POST['pwd'];
	  
	
	include 'admindb.php';  
	
	
	if($type=='Admin')
	{
	$q=mysql_query("SELECT * FROM `adminregister` WHERE  type='$type' and emailid='$email' and password='$pwd' and status='Active'");
$qq=mysql_num_rows($q);
$q2=mysql_fetch_array($q); 
		  if($qq==true)
		{ 
		
			$adname=$q2['fname'];
			$_SESSION['name']=$adname;
			
			$ademail=$q2['emailid'];
			 $_SESSION['email']=$ademail;
			  $_SESSION['subuser']=$ademail;
			   
			   $r=mysql_query("select * from admincomapnyinfo where adminemail='$ademail'");
		  $rr=mysql_num_rows($r); 
			 $row=mysql_fetch_array($r);
			echo $email1=$row['adminemail'];
		
					if($email!==$email1)
					{   //$UP=mysqli_query("UPDATE `members` SET  count='1' WHERE Email='$email'")or die(mysqli_error());
						echo "<script>window.location='fillcompanyinfo.php';</script>"; 
						
						}
							else
						 {  	
								$q=mysql_query("select * from admincomapnyinfo where adminemail='$ademail'");
								 $row1=mysql_fetch_array($q);
								echo $sec=$row1['security'];
								 
								 if($sec=='NONE')
								 {  
								 
								echo "<script>window.location='home/index1.php';</script>";
								  
									 }
									 else  if($sec=='QUESTIONS')
								 { 
									 echo "<script>window.location='securityverifiication.php';</script>";
									 }
									 else  if($sec=='OTP')
								 { 
									 echo "<script>window.location='otp.php';</script>";
									 }
						  }
		   
			 
		 }
    }
	else if($type=='driver')
	{
	
		include 'db1.php';
		
		$q=mysql_query("SELECT * FROM `newdriver1` WHERE   loginemail='$email' and pwd='$pwd' and status='Active'");
	$qq=mysql_num_rows($q);
	$q2=mysql_fetch_array($q); 
				  if($qq==true)
				{
				
	                            $dri=$q2['fname'];
								$_SESSION['drname']=$dri;
								
								$drid=$q2['id'];
								$_SESSION['drid']=$drid;
							 
										 
				
					echo "<script> window.location='subuser/driverlogin/index.php';</script>";
			
			       }
	}
  
	 
	 else
	{
			include 'db1.php';
			
				 $q=mysql_query("SELECT * FROM `subuser` WHERE  usertype='$type' and loginemail='$email' and loginpwd='$pwd' and status='Active'")or die(mysql_error());
$qq=mysql_num_rows($q);
$q2=mysql_fetch_array($q); 
		  if($qq==true)
		{  
			 
			function getUserIP()
			{
				$client  = @$_SERVER['HTTP_CLIENT_IP'];
				$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
				$remote  = $_SERVER['REMOTE_ADDR'];
			
				if(filter_var($client, FILTER_VALIDATE_IP))
				{
					$ip = $client;
				}
				elseif(filter_var($forward, FILTER_VALIDATE_IP))
				{
					$ip = $forward;
				}
				else
				{
					$ip = $remote;
				}
			
				return $ip;
			}

				
				$user_ip = getUserIP();
				
				  $user_ip; // Output IP address [Ex: 177.87.193.134]
				 
						$subname=$q2['fname'];
						$_SESSION['name']=$subname;
						$subemail=$q2['loginemail'];
						 $_SESSION['email']=$subemail;
						  $_SESSION['subuser']=$subemail;
						  
				 date_default_timezone_set("asia/calcutta");
				 date_default_timezone_get();
				 $date=date('d/m/Y'); 
				  $dt1=date("Y-m-d h:i:s a"); 
				  
						  $id=$q2['id'];
						  $_SESSION['subuserid']=$id;
						   
				   
				echo $location=$a1;
   
						  mysql_query("INSERT INTO `userlog`(`num`, `id`, `email`, `date`, `starttime`, `endtime`, `duration`, `location`, `ipaddress`) VALUES ('','$id','$subemail','$date','$dt1','','','$location','$user_ip')");
							 
							 
				  $_SESSION['num'] = mysql_insert_id(); 
				  $num=$_SESSION['num']; 
							 
						echo "<script> window.location='home/index.php';</script>";
								
		}
				else
				{
				echo "<script> alert('Inavalid Email/Password');window.location='login.php';</script>";
		
				}
		
 }
	 echo "<script>alert('Inavalid Email/Password');</script>";
	} 
		?>
	 

<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/videopopup.js"></script>
<script type="text/javascript" src="js/jquery.dropkick-min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>

<script type="text/javascript" src="js/main.js"></script>



</body>
</html>