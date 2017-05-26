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
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="css/videopopup.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<![endif]-->
</head>

<body>


<section class="wrapermain">
<section class="bannermain">
	<div class="container">
    	<div class="row">
        
        <div class="headertop">
        	<div class="col-md-5 col-sm-6 col-xs-12"><p><i class="fa fa-map-marker" aria-hidden="true"></i>254 Street Avenue, Los Angeles, LA 2415 US.</p></div>
            <div class="col-md-3 col-sm-6 col-xs-12 right"><p><i class="fa fa-clock-o" aria-hidden="true"></i>Mon - Fri : 09:00 - 17:00</p></div>
            <div class="col-md-2 col-sm-6 col-xs-12"><p><i class="fa fa-phone" aria-hidden="true"></i>+255-769-698-183</p></div>
            <div class="col-md-2 col-sm-6 col-xs-12 right"><a href="#" class="requestbtn">REQUEST DEMO</a></div>
        </div>
        
        <header>
        	<div class="col-md-3 col-sm-3"><h1 id="logo"><a href="index.html"><img src="images/logo.png" alt="logo"></a></h1>
        	</div>
            
            <div class="col-md-6 col-sm-7">
            	<div class="mainnavgatin">
                      <nav class="navbar navbar-default">
                      <div class="container-fluid">
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      </button>
                      
                      </div>
                      
                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                      <li class="active"><a href="#">About <span class="sr-only">(current)</span></a></li>
                     
                      <li class="dropdown">
                      <a href="#" role="button" aria-haspopup="true" aria-expanded="false">Features<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li><a href="#">Separated link</a></li>
                      <li><a href="#">One more separated link</a></li>
                      </ul>
                      </li>
                      <li><a href="#">Blog</a></li>
                      
                      <li class="dropdown">
                      <a href="#" role="button" aria-haspopup="true" aria-expanded="false">Industries<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li><a href="#">Separated link</a></li>
                      <li><a href="#">One more separated link</a></li>
                      </ul>
                      </li>
                      
                      <li><a href="#">Pricing</a></li>
                      
                      </ul>
                      
                      
                      </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                      </nav>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-2">
            	<div class="risisterbtns">
                	<!--<a href="organisationreg.html" class="rsisterbtn">RESISTER</a>
                   <a href="#" class="rsisterbtn">LOGIN</a>-->
                    <a href="adminregister.php" class="rsisterbtn"  >REGISTER</a>
                    <a href="#" class="rsisterbtn" onClick="openModaltwo();currentSlide(1)">LOGIN</a>
                    
                
                
				         <form action="" method="post" enctype="multipart/form-data">
                <div id="myModaltwo" class="modal modaltwo">
                <div class="caption-container">
                
                <div class="registerformmain">
                <div class="formbg">
                <h2><i class="fa fa-user-o" aria-hidden="true"></i> Domain Name</h2>
       
                <fieldset>
                
                
                
                
                <div class="inputrow">
                    <label>Fleethuduma.com</label>
                    <div class="inputtype">
                    <input type="text" name="domainname" class="form-control" placeholder="" required>
                    </div>
                
                </div>
                
                
                
                <div class="inputrow">
				 <input type="submit" name="submit" class="btn btn-default" value="Submit"  /> 
                       
                </div>
                
                          
                </fieldset>
       
                
                
                </div>
                </div>
                <span class="close cursor" onClick="closeModaltwo()">X</span>
                </div>
                
                </div>
                             
                             
                </div>
            </div>
			         </form>
					 
					 
					 

<?php
 
if(isset($_POST['submit']))
{

include 'admindb.php';

  $domainname=$_POST['domainname']; 
   $_SESSION['dbname']=$domainname;
  
 
$q=mysql_query("SELECT * FROM `adminregister` WHERE portalname='$domainname'");
$qq=mysql_num_rows($q);
$row=mysql_fetch_array($q);
if($qq==true)
{
echo $email=$row['emailid'];
	$_SESSION['email']=$email;	
	   
 echo "<script> window.location='login.php';</script>";
	
	}
	else
	{
		echo "<script>alert('invalid url');window.location='index.php';</script>";
	
		
		}

}


?>
 
			
        </header>
        
        <h2><span>Ease your</span> Fleet Operations <span>with</span><br>Fleet Huduma</h2>
        
        <div class="playvideorow">
            <div id="parallelogram">
                <div class="image"><a href="javascript:void(0)" class="playbtn" id="video1">PLAY VIDEO</a></div>
              
            </div>
			
            <div class="playheading">
                <p>Control all your fleet management<br> chaos with our cloud<br> <strong>Easy to use software</strong></p>
            </div>
	<!--<div id="vidBox">
                  <div id="videCont">
                      <video autoplay id="v1" loop controls>
                      <source src="media/video.mp4">
                      <source src="media/video.mp4">
                      </video>
                  </div>
              </div>-->
        
        </div>
        
        	
        </div>
    </div>
</section>

<div class="catagoriesmain">
	<div class="container">
    	<ul class="catagoriesnav">
        	<li class="active"><a href="#">Vehicles</a></li>
            <li><a href="#">Employees </a></li>
            <li><a href="#">Drivers</a></li>
            <li><a href="#">Trips</a></li>
            <li><a href="#">Leads</a></li>
            <li><a href="#">Maintenance</a></li>
            <li><a href="#">Finance</a></li>
        </ul>
    </div>
</div>




<section class="services">
	<div class="container">
    	<div class="row">
        	<div class="col-md-4 col-sm-4">
            	<figure><img src="images/userfrindly.png" alt="user"></figure>
                <h3>User Friendly UI</h3>
              	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                <a href="#">Read More</a>
          </div>
          
          <div class="col-md-4 col-sm-4">
            	<figure><img src="images/mobility.png" alt="user"></figure>
                <h3>Mobility</h3>
              	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                <a href="#">Read More</a>
          </div>
          
          <div class="col-md-4 col-sm-4">
            	<figure><img src="images/automation.png" alt="user"></figure>
                <h3>Automation</h3>
              	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                <a href="#">Read More</a>
          </div>
          
          
        </div>
    </div>
</section>

<section class="getstartedmain">
	<div class="container">
    	<div class="row">
       	  	<div class="col-md-4 col-sm-4"><p><small>Get</small> Started<br><small>in less than</small><br>60 Seconds</p></div>
            <div class="col-md-8 col-sm-8"><figure><img src="images/mac.png" alt="mac"></figure></div>
        </div>
    </div>
</section>


<section class="companiesmain">
	<div class="container">
    	<div class="row">
        		<h4>FleetHuduma is helping 67 <strong>companies</strong> like yours<p>Manage over 12,014 assets and counting</p></h4>
                <div class="col-md-5 col-sm-5"><figure class="companyimg"><img src="images/companiesimg.png" alt="mac"></figure></div>
            	<div class="col-md-7 col-sm-7"><figure><img src="images/assetsimg.png" alt="mac"></figure></div>
        </div>
    </div>
</section>


<section class="goalsmain">
	<div class="container">
    	<div class="row">
        	<div class="col-md-6 col-sm-6">&nbsp;</div>
            <div class="col-md-6 col-sm-6"><p>FleetHuduma helps you<br> concentrate on your company�s<br><strong> Goals and spend less time <br>on your <small>operations</small></strong></p></div>	
        </div>
    </div>
</section>


 <section class="cupsofcoffeBg">
     	<div class="container">
        <div class="row">
     	<div class="cupsoffMain">
        	<div class="col-md-4 col-sm-4">
            <div class='section sectionTwo wow slideInDown'>
            	<span><img src="images/customers.png" alt="cus"></span>
              	<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='84234' data-delay='10' data-increment="100">01</div>
                <p>Customers</p>
            </div>
          	</div>
            <div class="col-md-4 col-sm-4">
             <div class='section sectionTwo wow slideInDown'>
            	<span><img src="images/functionalities.png" alt="faci"></span>
              	<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='84234' data-delay='10' data-increment="100">01</div>
                <p>Functionalities</p>
             </div>
             </div>
             <div class="col-md-4 col-sm-4">
             <div class='section sectionThree wow slideInUp'>
            	<span><img src="images/achivments.png" alt="achiv"></span>
              	<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='84234' data-delay='10' data-increment="100">01</div>
                <p>Achievements</p>
             </div>
             </div>
             
             
        </div>
        </div>
        
        </div>
</section>


<section class="tesimonialsBg wow slideInDown">
    	<div class="container">
		<ul class="sliderthree">
        	<li>
                <div class="testContent">
                	<blockquote>
                    	<i class="fa fa-quote-left" aria-hidden="true"></i>
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                    	Aenean sollicitudin, lorem quis bibendumenim.
                     	<i class="fa fa-quote-right" aria-hidden="true"></i>
                     </blockquote>
                    <figure class="testImg"><img src="images/testi-img.png" alt="testmonial"></figure>
                </div>
                <p>Person Name <br><small>Position, Company</small></p>
            </li>
            
            <li>
                <div class="testContent">
                	<blockquote>
                    	<i class="fa fa-quote-left" aria-hidden="true"></i>
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                    	Aenean sollicitudin, lorem quis bibendumenim.
                     	<i class="fa fa-quote-right" aria-hidden="true"></i>
                     </blockquote>
                    <figure class="testImg"><img src="images/testi-img.png" alt="testmonial"></figure>
                </div>
                <p>Person Name <br><small>Position, Company</small></p>
            </li>
            
            <li>
                <div class="testContent">
                	<blockquote>
                    	<i class="fa fa-quote-left" aria-hidden="true"></i>
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                    	Aenean sollicitudin, lorem quis bibendumenim.
                     	<i class="fa fa-quote-right" aria-hidden="true"></i>
                     </blockquote>
                    <figure class="testImg"><img src="images/testi-img.png" alt="testmonial"></figure>
                </div>
                <p>Person Name <br><small>Position, Company</small></p>
            </li>
            
            
        </ul>
        </div>
</section>
     

<section class="brandsbg">
	<div class="container">
    	<div class="row">
        	<div class="col-md-5 col-sm-5 col-xs-12">
            	<div class="helpingbtn">
                	<p>Who are we <strong>Helping...?</strong></p>
            	</div>
            </div>
            
            <div class="col-md-7 col-sm-7 col-xs-12">
            	<div class="brandscorawsel">
                  <div class="owl-carousel">
                  <div class="item"><img src="images/brand-1.png" alt="logo"></div>
                  <div class="item"><img src="images/brand-2.png" alt="logo"></div>
                  <div class="item"><img src="images/brand-3.png" alt="logo"></div>
                  <div class="item"><img src="images/brand-1.png" alt="logo"></div>
                  <div class="item"><img src="images/brand-2.png" alt="logo"></div>
                  <div class="item"><img src="images/brand-3.png" alt="logo"></div>
                  <div class="item"><img src="images/brand-1.png" alt="logo"></div>
                  <div class="item"><img src="images/brand-2.png" alt="logo"></div>
                  <div class="item"><img src="images/brand-3.png" alt="logo"></div>
            
                  </div>
               </div>
            </div>
        
        </div>
    </div>
</section>

<section class="getintouchmain">
	<div class="container">
		<div class="getintouch">
        	<p>Get in Touch Today<strong>+255-769-698-183</strong></p>
        </div>    
    </div>
</section>


<footer id="footer">
	<div class="container">
    
    <div class="row">
    	<div class="col-md-4 col-sm-4">
    	<div class="footerLinks">
        	<h6>Fleet Huduma</h6>
            <ul>
            	<li>Address:</li>
                <li>4578 Marmora St, </li>
                <li>San Francisco D04 89GR.</li>
                <li>Telephone: 1800-345-6018</li>
                <li><a href="mailto:fleet@huduma.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> E-mail : fleet@huduma.com</a></li>
            </ul>
        </div>
        </div>
        
        <div class="col-md-4 col-sm-4">
        <div class="footerLinks">
        	<h6>Newsletter</h6>
            <div class="formBlock">
                 <form action="contact.php" method="post">
                  <fieldset>
                    <div class="formRow">
                      <input type="text" name="name" class="texttab" placeholder="Your Name" required>
                     </div>
                     
                     <div class="formRow">
                      <input type="email" name="email" class="texttab texttabtwo" placeholder="Your Email" required>
                    </div>
                    
                    <div class="submitbg">
                      <input type="submit" name="submit" class="submittab" value="SUBSCRIBE">
                    </div>
                  </fieldset>
                </form>
              </div>
        </div>
        </div>
        
        <div class="col-md-4 col-sm-4">
        <div class="footerLinks footerLinkstwo">
        	<h6>Fleet Huduma</h6>
            <ul>
            	<li>+012 (1234) 7794</li>
                <li>+012 (1234) 7794</li>
            </ul>
        </div>
        </div>
        
       </div>
       
 <div class="row">
 	<div class="col-md-12 col-sm-12">
    	<div class="socialicons">
            <ul>
            	<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
 </div>
        
        
        
             
        
        
        
    </div>
    <p>Copyright@fleethuduma.com</p>
</footer>


</section>
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/videopopup.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>



</body>
</html>