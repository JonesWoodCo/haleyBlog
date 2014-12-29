<?php
if ( ( !isset($_COOKIE['loggedin' ] )) || ( $_COOKIE['loggedin']!="31dec2013" ) ) {
    header("Location: index.php");
}
?>



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
    <link href="formcss.css" rel="stylesheet" type="text/css"/>
    <script src="app.js"></script>
    <script src="app2.js"></script>
    <link rel="icon" type="image/png" href="haleyFavicon.png">
  </head>
  
  
  <body>
      	<div class="navbar navbar-inverse navbar-fixed-top">
	    <div class="container haleycontainer">
		<div class="navbar-header">
		    <div class="navbar-brand logo">
                        <img src="brandNameNavBar.jpg">
                    </div>
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
                        <li><a>|</a></li>
			<li><a href="logout.php" class="logoutLink">LOGOUT</a></li>
		    </ul>
		</div>
	    </div>
	</div>
        
        
        <div class="htmlhelp">
	    <h1 style="color: #FF0066;">HTML help</h1>
	    
	    if you want to link a word or phrase, insert the following code:
	    </br>
	    <p style="color: #ffffff; font-size: 12px;">&lt;a href=" // insert URL here //"&gt // insert text or phrase here // &lt;/a&gt</p>
	    dont forget to remove the "//"  and leave the double quotation marks.
	    
	    <div class="example">
	    <p style=" color: #ffffff; font-size: 12px;"> example.</p>
	    <p style="color: #ffffff; font-size: 12px;">join  &lt;a href="http://www.facebook.com"&gt facebook &lt;/a&gt today!</p>
	    will render as: <p style=" color: #ffffff; font-size: 12px;">join <a href="http://www.facebook.com">facebook</a> today!</p>
	    </div>
	    
	    </br></br>
	   if you want to put something into quotation marks:
	   <p style=" color: #ffffff; font-size: 12px;">you will need to replace " " with &lt;q> // insert text here //  &lt;/q>.</p>
	   totes obvi, you take out the"//'s" again :)
	   
	   <div class="example">
	   <p style=" color: #ffffff; font-size: 12px; ">example.</p>
	   <p style=" color: #ffffff; font-size: 12px;">&lt;q>I have a dream!&lt;/q></p>
	   will render as:
	   <p style=" color: #ffffff; font-size: 12px;"><q>I have a dream!</q></p>
	   </div>
	   
	   </br></br>
	   if you want create a double space between paragraphs:
	   <p style=" color: #ffffff; font-size: 12px;">you will need to insert &lt;/br>&lt;/br> between the paragraphs.</p>
	   if you don't the browser will always just start the next paragraph on the next line - no matter how many times you hit 'enter'
	  
	   <div class="example">
	     <p style=" color: #ffffff; font-size: 12px; ">example.</p>
	      <p style=" color: #ffffff; font-size: 12px; ">paragraph one. &lt;/br>&lt;/br> paragraph two.</p>
	       will render as:
	   <p style=" color: #ffffff; font-size: 12px;">paragraph one. </br></br> paragraph two.</p>	    
	   </div>
	    
	   <div class="example">
	     <p style=" color: #ffffff; font-size: 12px; ">example.</p>
	      <p style=" color: #ffffff; font-size: 12px; ">paragraph one. &lt;/br>&lt;/br> paragraph two.</p>
	       will render as:
	   <p style=" color: #ffffff; font-size: 12px;">paragraph one. </br></br> paragraph two.</p>	    
	   </div>
	   
	    </br></br>
	   if you want create block quotes:
	   <p style=" color: #ffffff; font-size: 12px;">all you have to do is wrap the long quote in &lt;blockquote&gt;  &lt;/blockquote&gt;</p>
	   <div class="example">
	     <p style=" color: #ffffff; font-size: 12px; ">example.</p>
	      <p style=" color: #ffffff; font-size: 12px; ">&lt;blockquote&gt; "One ring to rule them all, and in the darkness bind them." &lt;/blockquote&gt;</p>
	       will render as:
	   <blockquote>"One ring to rule them all, and in the darkness bind them."</blockquote></p>
	   </br></br>
	   </div>
	    don't feel daunted by any of this, you're a champ! </br>
	    you can copy and paste all this code straight from this side bar and into the Content section. :) </br>
	    if you have any other questions,  you have my number. ;) </br>
	    Love you bae</br>
	    Chris.
	</div>
        
        
        
        
        
        
        
        
        
   
   <div class="formBody">
   
   <?php
   if($_POST['formSubmit'] == "Submit")
    {
   $varTitle = $_POST ['formTitle'];
   $varPublisher = $_POST['formPublisher'];
   $varDate = $_POST ['formDate'];
   $varPhoto = $_POST ['formPhoto'];
   $varContent = $_POST ['formContent'];
   $varHover =$_POST ['formHover'];
   $varPhotoTile = $_POST  ['formPhotoTile'];
   $var = htmlspecialchars($varContent);
   $con=htmlspecialchars($varTitle);
   
   $sql="INSERT into blogs (";
   $sql.="Title, Created, Photo, Content, Hover, Publisher, Articlephoto";
   $sql.=")values(";
   $sql.="'$con', '$varDate',' $varPhoto', '$var', '$varHover', '$varPublisher', '$varPhotoTIle'";
   $sql.=")";
   echo $sql;
   mysql_query($sql);
 

   
   }
   ?>
        <form style=" margin: auto; padding-left:0px; padding-right: 200px;" action = "form.php" method = "post">
            
           Title:
           </br>
            <input type="text" name="formTitle" maxlength="50" style="width: 600px;">
                </br></br>
                
            Published By:
           </br>
            <input type="text" name="formPublisher" maxlength="50" style="width: 600px;">
                </br></br>
                    
           Date: </br>
            <input type="date" name="formDate" maxlength="15">
                </br></br>

            Article Photo (must be a URL):
           </br>
            <input type="text" name="formPhoto" maxlength="50" style="width: 300px;">
                </br></br>
            
            Article Photo Tile (must be a URL):
           </br>
            <input type="text" name="formPhotoTile" maxlength="50" style="width: 300px;">
                </br></br>
                
            Article Photo Tile Hover (must be a URL):
           </br>
            <input type="text" name="formHover" maxlength="50" style="width: 300px;">
                </br></br>

            Content:</br>
            <input type="text" name="formContent" maxlength="5000" style="height: 633px; width: 735px;">
                    </br></br>

              <input type="submit" name="formSubmit" value="Submit">      
        </form>
     </div>       

  </body>
</html>
