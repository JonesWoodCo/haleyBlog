<?php
require_once("dbconnect.php");
$postid=$_GET['ID'];
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="css/testmain.css" rel="stylesheet" type="text/css"/>
		<script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/jquery-ui.js'></script>
		<script type='text/javascript' src='js/jquery-scrollto.js'></script>
		 <script src="js/app2.js"></script>
		  <script src="js/app3.js"></script>
		<link rel="icon" 
			type="image/png" 
			href="img/haleyFavicon.png">
		<title>Haley Halverson</title>
	</head>
	<body>		 
		
		<div class="loginAppear"></div>
                
		<div class="login">
			<p style="color: #ffffff;">ADMIN LOGIN</p>
			<form action="auth.php" method="post">
				<p style="color: #ffffff;">Username:</p> <input type="text" name="name">
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
					<li><a href="index.php#haleyAboutHome" class="aboutLink">ABOUT</a></li>							
					<li>|</li>							
					<li><a href="#" class="blogLink">BLOG</a></li>							
					<li>|</li>
					<li><a href="index.php#haleyContactHome" class="contactLink">CONTACT</a></li>						
				</ul>
			</div>	
		</div>
			
                        
                         <div class="haleyBlogBlog">
      
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
                                          echo "<div class='blogTile'>
                                                        <div class='blogbackground' style='height: 150px;. width: 150px; background-image: url( $photo);'>
                                                            <a href='blog.php?ID=$postid'><img class='hideMe1' src=' $hover ' style='background-image: url( $photo); height: 150px; width: 150px;'></a>
                                                        </div>
                                                    </div>"	  ;
                                        }
                            ?>
                            
                        </div>
                        <?php
                            $sql = "select * from blogs where ID=$postid";
                                echo("SQL: $sql");
                             $rs = mysql_query($sql);
                              if($rs) $rsc = mysql_num_rows($rs);
                              for($i=0; $i < $rsc; $i++){
                                    $title = mysql_result($rs, $i, "Title");
                                    $created = mysql_result($rs, $i, "Created");
                                    $photo = mysql_result($rs, $i, "Photo");
                                    $hover = mysql_result($rs, $i, "Hover");
                                    $publisher = mysql_result($rs, $i, "Publisher");
                                    $content = mysql_result($rs, $i, "Content");
                                    $articlephoto = mysql_result($rs, $i, "Articlephoto");
                                echo "Column1 is $photo and column 2 is $hover";
                              }
                            ?>  
                            <div class="haleyContentBlog">
                              <h1> <b style="font-size: 1.4em"><?php echo $title?></b></h1>
					<h5><i><?php echo $created?></i></h5>
					<h6>By Haley Halverson. Published by <?php echo $publisher ?></h6>
					<img style="width: 500px; " src="<?php //echo $articlephoto?>">
					<p><?php echo $content ?></p>
                            </div>   
                        
                        
			<div class="socialFooterLinks"><ul class="footerSocial" >
								<li><a href="https://twitter.com/_hhalverson" class="footerTwitter" ><img src="img/twitterFooter.png"></a></li>
								<li>|</li>
								<li><a href="https://www.linkedin.com/in/haleyhalverson" class="footerLinkedIn"><img src="img/linkedInFooter.png"></a></li>												
							</ul></div>
		<div class="copyright"><p>Copyright Haley Halverson All Rights Reserved. Website design by <a href="http://topherjonesy.github.io/Toaf/">Mandrake.</a></p></div>
	</body>
</html>
<!--http://getbootstrap.com/components/#navbar
http://getbootstrap.com/2.3.2/scaffolding.html#responsive
http://www.bootply.com/101069#