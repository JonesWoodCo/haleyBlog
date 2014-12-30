<?php
require_once("dbconnect.php");
$postid=$_GET['ID'];
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="main.css" rel="stylesheet" type="text/css"/>
		<script type='text/javascript' src='jquery.js'></script>
		<script type='text/javascript' src='jquery-ui.js'></script>
		<script type='text/javascript' src='jquery-scrollto.js'></script>
		 <script src="app2.js"></script>
		  <script src="app3.js"></script>
		<link rel="icon" 
			type="image/png" 
			href="haleyFavicon.png">
		<title>Haley Halverson</title>
	</head>
	<body>		 
		
		<div class="loginAppear" style=" position: fixed; z-index: 1031; top: 0px; right: 0px; height: 30px; width: 30px; background-color: #1f1f1f;"></div>
      <div class="login" style=" box-shadow: 0px 1px 20px #000000; z-index: 999; position: fixed; top: 300px; left: 600px; background-color: #1f1f1f; height: 240px; width: 230px; border: 0px; margin: 0px; padding: 30px;">
	    <p style="color: #ffffff;">ADMIN LOGIN</p>
	    <form action="auth.php" method="post">
		  <p style="color: #ffffff;">Username:</p> <input type="text" name="name">
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
								<li><a href="index.php#haleyAboutHome" class="aboutLink">ABOUT</a></li>							
		    						<li><a>|</a></li>
								<li><a href="blog.php" class="blogLink">BLOG</a></li>														
								<li><a>|</a></li>
								<li><a href="index.php#haleyContactHome" class="contactLink">CONTACT</a></li>						
							</ul>
						</div>
					</div>
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
		<div class="container">	
			<div class="content">
				<div class="mainArticleSpace ">
					<h1><?php echo $title?></h1> 
					<h5><i><?php echo $created?></i></h5>
					<h6>By Haley Halverson. Published by <?php echo $publisher ?></h6>
					<img style="width: 100%; " src="<?php echo $articlephoto?>">
					<p><?php echo $content ?></p>			
				</div>
				
	<?php
		$sql = "select * from blogs limit 10";
		//echo("SQL: $sql");
		$rs = mysql_query($sql);
		if($rs) $rsc = mysql_num_rows($rs);
		for($i=0; $i < $rsc; $i++){
			$title = mysql_result($rs, $i, "Title");
			$created = mysql_result($rs, $i, "Created");
			$photo = mysql_result($rs, $i, "Photo");
			$hover = mysql_result($rs, $i, "Hover");
			$content = mysql_result($rs, $i, "Content");
			$postid = mysql_result($rs, $i, "ID");
			
			
		//echo "Column1 is $photo and column 2 is $hover";
		
		
		
	
		
		
			echo	"<div class='blogSideMenu '>
						<div class='articles'>						
							<div class='sideblogtile' style='width: 150px; height: 150px;  background-image: url( $photo);'>
								<div class='article-1'>	
									<a href=' blog.php?ID=$postid'>
									<img class='hideMe1' src=' $hover ' style='width: 150px; height: 150px;'>
									</a>
								</div>
							</div>							
						</div>												
					</div>";
		}
	?>
				
				</div>
			</div>		
			
		<div class="copyright"><p>Copyright Haley Halverson All Rights Reserved. Website design by <a href="http://topherjonesy.github.io/Toaf/">Mandrake.</a></p></div>
	</body>
</html>
<!--http://getbootstrap.com/components/#navbar
http://getbootstrap.com/2.3.2/scaffolding.html#responsive
http://www.bootply.com/101069#