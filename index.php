<?php
require_once("dbconnect.php");


if(isset($_POST) && !empty($_POST) ){
	//an email must be sent

	$name=$_POST['name'];
        $sender=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        $email="Name: " . $name . "\n". "\n" . "Email: " . $sender . "\n". "\n" . "Subject: " . $subject . "\n". "\n" . "Message: " . $message;
        mail("haley.halverson@aol.com", $subject, $email);
}
?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'><!--for the droid serif font-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery-ui.js'></script>
    <script type='text/javascript' src='js/jquery-scrollto.js'></script>
    <link href="css/main.css" rel="stylesheet" type="text/css"/>
    <link href="css/main2.css" rel="stylesheet" type="text/css"/>
    <script src="js/app.js"></script>
    <script src="js/app2.js"></script>
    <script src="js/app3.js"></script>
    <link rel="icon" type="image/png" href="img/haleyFavicon.png">
  </head>
  <body>
    
    
    <div class="loginAppear"></div>
    
      <div class="login">
	    <p style="color: #ffffff;">ADMIN LOGIN</p>
	    <form action="auth.php" method="post">
		  <p style="color: #ffffff;">Username:</p> <input type="text" name="name"><br>
		 <p style="color: #ffffff;"> Password:</p>  <input type="password" name="password"><br><br>
		  <input class="loginButton" type="submit" value="Login">
	    </form>
      </div>
      			<div class="navbar-whole">
			  <div class="logo-holder"> 
			    <div class="navbar-logo"><img class="logo" src="img/brandNameNavBar.png">
			    </div>
			  </div>	
			  <div class="nav-links"> 
			    <ul class="nav-ul" style:"color: #ffffff;">
			      <li><a href="index.php" class="homeLink" >HOME</a></li>
			      <li>|</li>
			      <li><a href="#" class="aboutLink">ABOUT</a></li>							
		    	      <li>|</li>							
			      <li><a href="blog.php?ID=2" class="blogLink">BLOG</a></li>							
			      <li>|</li>
			      <li><a href="#" class="contactLink">CONTACT</a></li>						
			    </ul>
			  </div>	
			</div>
                        
			
    <div class="slider">
      <div class="slide active-slide">
        <div class="container">
          <div class="row">
            <div class="slide-copy col-xs-5 slide-1">
              <h2 style="margin-top: 110px;"><strong>Connect </strong>with me</h2>
	      <h2>on <a class="lISlideLink" href="https://www.linkedin.com/in/haleyhalverson"><img src="img/slide1LI.png"></a></h2>
              <h2>to stay updated </h2>
	      <h2>in my professional </h2>
	      <h2>network.</h2>
	      <div class="trp">photo courtesy of:<a href="https://www.facebook.com/TR.fotowerks"><img src="img/tRPhotoLogo.png"></a></div>
            </div>            
          </div>
        </div>      
      </div>
    
    
    
      <div class="slide">
        <div class="container">
          <div class="row">
            <div class="slide-copy col-xs-12 slide-2">
              <img style="top: 100px; left: 100px; height: 350px; position: absolute;" class="happyHolidays" src="img/haleyHappyHoliday.png">
            </div>            
          </div>
        </div>      
      </div>
      
      
      <div class="slide">
        <div class="container">
          <div class="row">
            <div class="slide-copy col-xs-5 slide-3">
              
              <h2 style="margin-top: 210px;"><strong>Follow </strong>me on</h2>
	      <h2><a class="twitterSlideLink" href="https://twitter.com/_hhalverson"><img src="img/slide3Twitter.png"></a>.</h2>
              
	      
	      <div class="trp">photo courtesy of:<a class="twitterSlideLink" href="https://www.facebook.com/TR.fotowerks"><img src="img/tRPhotoLogo.png"></a></div>
            </div>            
          </div>
        </div>      
      </div>       
    </div>
    <div class="slider-nav">
      <a href="#" class="arrow-prev"><img src="img/arrow-prev.png"></a>
      <ul class="slider-dots">
        <li class="dot active-dot">&bull;</li>
        <li class="dot">&bull;</li>
        <li class="dot">&bull;</li>        
      </ul>
      <a href="#" class="arrow-next"><img src="img/arrow-next.png"></a>
    </div>
    
    
    
    <a name="haleyAboutHome"></a>
    <div class="haleyAboutHome">
      <p style="padding-top: 30px; padding-bottom: 70px; text-indent: 60px;"><b style="font-size: 1.4em">Haley Halverson</b> was born in 1993 in Fremont, Nebraska. Haley was homeschooled from K-12 and currently attends Hillsdale College in Hillsdale, Michigan. During her college career she did coursework at Oxford University, in Oxford, England, interned in Indianapolis, IN, at <a href="http://www.libertyfund.org/">Liberty Fund</a> and in Washington D.C. at the <a href="http://www.heritage.org/">Heritage Foundation</a> and <a href="http://www.frc.org/">Family Research Council</a>. She is also a member of <a href="https://www.kappakappagamma.org/kappa/">Kappa Kappa Gamma</a> sorority. Haley will graduate in spring of 2015 with a double major in Christian Studies and Politics. </p>
    </div>
    
    
    
    
    <div class="haleyBlogHome">
      <p><b style="font-size: 1.6em">Blogs</b></p>
      
        <?php
	$sql = "select * from blogs limit 10";
	    //echo("SQL: $sql");
	 $rs = mysql_query($sql);
	  if($rs) $rsc = mysql_num_rows($rs);
	  for($i=0; $i < $rsc; $i++){
	    $photo = mysql_result($rs, $i, "Photo");
	     $id = mysql_result($rs, $i, "ID");
	    $hover = mysql_result($rs, $i, "Hover");
	    //echo "Column1 is $photo and column 2 is $hover";
	    echo "<div class='homeProstitutionBlog'>
			  <div class='blogbackground' style='height: 150px;. width: 150px; background-image: url( $photo);'>
			      <a href='blog.php?ID=$id'><img class='hideMe1' src=' $hover ' style='background-image: url( $photo); height: 150px; width: 150px;'></a>
			  </div>
		      </div>"	  ;
	  }
	?>
        
    </div>
    
    
    
    <a name="haleyContactHome"></a>
    <div class="haleyContactHome">
            <div class="contactTextSide" ">    
                <p><b style="font-size: 1.4em">Contact Me</b></p>
                
                <p class="contactParagraph">If you would like to have me write about a specific topic or have a question/ comment about something that I have written, you can send them to me via this form!<br /></p>
                <a><img class="messageDrop" src="img/messageDrop.png"></a>
                
            </div>
        </div>
    
    
    
           <div class="messageMe">
                 <div class="messageBody">
                    
							<div class="container">
								
								<form method="post" action="index.php">
									<div class="row uniform">
										<div class="6u 12u(xsmall)"><input type="text" name="name" id="name" placeholder="Name" /></div>
										<div class="6u 12u(xsmall)"><input type="email" name="email" id="email" placeholder="Email" /></div>
									</div>
									<div class="row uniform">
										<div class="12u"><input type="text" name="subject" id="subject" placeholder="Subject" /></div>
									</div>
									<div class="row uniform">
										<div class="12u"><textarea name="message" id="message" placeholder="Message" rows="6"></textarea></div>
									</div>
									<div class="row uniform">
										<div class="12u">
											<ul style=" list-style: none;" class="actions">
												<li><input style="display: inline; width: 150px; border: 0px;" type="submit" class="sendMessage" value="Send Message" /></li>
												
												
											</ul>
										</div>
									</div>
								</form>
							</div>
                 </div>
            </div>
    
    
        <div class="socialFooterLinks"><ul class="footerSocial" >
							      
								<li><a href="https://twitter.com/_hhalverson" class="footerTwitter" ><img src="img/twitterFooter.png"></a></li>
								<li>|</li>
								<li><a href="https://www.linkedin.com/in/haleyhalverson" class="footerLinkedIn"><img src="img/linkedInFooter.png"></a></li>												
							</ul></div>
	<div class="copyright"><p>Copyright Haley Halverson All Rights Reserved. Website design by <a href="http://www.mandrakedesign.com">Mandrake.</p></a></div>
  </body>
</html>
