<?php
require_once("dbconnect.php");
?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'><!--for the droid serif font-->
    <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type='text/javascript' src='jquery.js'></script>
    <script type='text/javascript' src='jquery-ui.js'></script>
    <script type='text/javascript' src='jquery-scrollto.js'></script>
    <link href="main.css" rel="stylesheet" type="text/css"/>
    <link href="main2.css" rel="stylesheet" type="text/css"/>	
    <script src="app.js"></script>
    <script src="app2.js"></script>
    <script src="app3.js"></script>
    <link rel="icon" type="image/png" href="haleyFavicon.png">
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
      			<div class="navbar navbar-inverse navbar-fixed-top">
					<div class="container haleycontainer">
						<div class="navbar-header">
							<div class="navbar-brand logo"><img src="brandNameNavBar.jpg"></div>
						</div>
						<div class="navbar-collapse collapse" id="haleycontainer">
							<ul class="nav navbar-nav" style:"color: #ffffff;">
								<li><a href="index.php" class="homeLink" >HOME</a></li>
								<li><a>|</a></li>
								<li><a href="#" class="aboutLink">ABOUT</a></li>							
		    						<li><a>|</a></li>							
								<li><a href="#" class="blogLink">BLOG</a></li>							
								<li><a>|</a></li>
								<li><a href="#" class="contactLink">CONTACT</a></li>						
							</ul>
						</div>
					</div>
				</div>
    <div class="slider">
      <div class="slide active-slide">
        <div class="container">
          <div class="row">
            <div class="slide-copy col-xs-5 slide-1">
              <h2 style="margin-top: 110px;"><strong>Connect </strong>with me</h2>
	      <h2>on <a class="lISlideLink" href="https://www.linkedin.com/in/haleyhalverson"><img src="slide1LI.png"></a></h2>
              <h2>to stay updated </h2>
	      <h2>in my professional </h2>
	      <h2>network.</h2>
	      <div class="trp">photo courtesy of:<a href="https://www.facebook.com/TR.fotowerks"><img src="tRPhotoLogo.png"></a></div>
            </div>            
          </div>
        </div>      
      </div>
    
    
    
      <div class="slide">
        <div class="container">
          <div class="row">
            <div class="slide-copy col-xs-12 slide-2">
              <img style="top: 100px; left: 100px; height: 350px; position: absolute;" class="happyHolidays" src="haleyHappyHoliday.png">
            </div>            
          </div>
        </div>      
      </div>
      
      
      <div class="slide">
        <div class="container">
          <div class="row">
            <div class="slide-copy col-xs-5 slide-3">
              
              <h2 style="margin-top: 210px;"><strong>Follow </strong>me on</h2>
	      <h2><a class="twitterSlideLink" href="https://twitter.com/_hhalverson"><img src="slide3Twitter.png"></a>.</h2>
              
	      
	      <div class="trp">photo courtesy of:<a class="twitterSlideLink" href="https://www.facebook.com/TR.fotowerks"><img src="tRPhotoLogo.png"></a></div>
            </div>            
          </div>
        </div>      
      </div>       
    </div>
    <div class="slider-nav">
      <a href="#" class="arrow-prev"><img src="arrow-prev.png"></a>
      <ul class="slider-dots">
        <li class="dot active-dot">&bull;</li>
        <li class="dot">&bull;</li>
        <li class="dot">&bull;</li>        
      </ul>
      <a href="#" class="arrow-next"><img src="arrow-next.png"></a>
    </div>
    
    
    
    <a name="haleyAboutHome"></a>
    <div class="haleyAboutHome">
      <p style="padding-top: 30px; padding-bottom: 70px; text-indent: 60px;"><b style="font-size: 1.4em">Haley Halverson</b> was born in 1993 in Fremont, Nebraska. Haley was homeschooled from K-12 and currently attends Hillsdale College in Hillsdale, Michigan. During her college career she did coursework at Oxford University, in Oxford, England, interned in Indianapolis, IN, at <a href="http://www.libertyfund.org/">Liberty Fund</a> and in Washington D.C. at the <a href="http://www.heritage.org/">Heritage Foundation</a> and <a href="http://www.frc.org/">Family Research Council</a>. She is also a member of <a href="https://www.kappakappagamma.org/kappa/">Kappa Kappa Gamma</a> sorority. Haley will graduate in spring of 2015 with a double major in Christian Studies and Politics. </p>
    </div>
    
    
    
    
    <div class="haleyBlogHome">
      <p style="font-size: 1.8em; text-indent: 60px;"> Blogs</p>
      
      
      
 
        <?php
	$sql = "select * from blogs limit 5";
	    //echo("SQL: $sql");
	 $rs = mysql_query($sql);
	  if($rs) $rsc = mysql_num_rows($rs);
	  for($i=0; $i < $rsc; $i++){
	    $photo = mysql_result($rs, $i, "Photo");
	     $postid = mysql_result($rs, $i, "ID");
	    $hover = mysql_result($rs, $i, "Hover");
	    //echo "Column1 is $photo and column 2 is $hover";
	    echo "<div class='homeProstitutionBlog'>
			  <div class='blogbackground' style='height: 150px;. width: 150px; background-image: url( $photo);'>
			      <a href='blog.php?ID=$postid'><img class='hideMe1' src=' $hover ' style='background-image: url( $photo); height: 150px; width: 150px;'></a>
			  </div>
		      </div>"	  ;
	  }
	?>
        
	
	
    
    
    
        
        
        
    </div>
    
    
    
    <a name="haleyContactHome"></a>
    <div class="haleyContactHome" style="width: 100%; height: 550px;"><p style="font-size: 1.8em; text-indent: 60px; width: 411px;"> Contact me</p>
      <div class="messageMe" style="width: 360px; float: left; height: 411px; display: inline-block;">
	<!-- Do not change the code! -->
	<a id="foxyform_embed_link_621050" href="http://www.foxyform.com/"></a>
	<script type="text/javascript">
	  (function(d, t){
	   var g = d.createElement(t),
             s = d.getElementsByTagName(t)[0];
	     g.src = "http://www.foxyform.com/js.php?id=621050&sec_hash=dcc36268ac1&width=350px";
	     s.parentNode.insertBefore(g, s);
	  }(document, "script"));
	</script>
	<!-- Do not change the code! -->
	</div>
      
      
      <div class="contactTextSide" style="float: left; height: 500px; width: 480px; margin-left: 100px; border: 0px; padding: 0px;">
	<div class="contactText">
            <p style="text-indent: 60px; color: #e6e6e6;">If you would like to have me write about a specific topic or have a question/ comment about something that I have written, you can send them to me via this form!</p>
        </div>
  
      </div>
    </div>
    
        <div class="socialFooterLinks"><ul class="footerSocial" >
								<li><a href="https://twitter.com/_hhalverson" class="footerTwitter" ><img src="twitterFooter.png"></a></li>
								<li>|</li>
								<li><a href="https://www.linkedin.com/in/haleyhalverson" class="footerLinkedIn"><img src="linkedInFooter.png"></a></li>												
							</ul></div>
	<div class="copyright"><p>Copyright Haley Halverson All Rights Reserved. Website design by <a href="http://topherjonesy.github.io/Toaf/">Mandrake.</p></a></div>
  </body>
</html>
