<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Welcome to NibbleCircle </title>
        <link rel="stylesheet" type="text/css" href="stylesheetnew.css" />
  <link rel="stylesheet" type="text/css" href="viewstyle2.css" />
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/style2.css" type="text/css" media="screen"/>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />
        <script src="js/jquery-1.8.3.min.js"></script>
        <script src="css/5grid/init.js"></script>
        <script src="js/init.js"></script>
       <link rel="stylesheet" href="css/style2.css" type="text/css" media="screen"/>
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <noscript>
        <link rel="stylesheet" href="css/5grid/core.css" />
        <link rel="stylesheet" href="css/5grid/core-desktop.css" />
        <link rel="stylesheet" href="css/5grid/core-1200px.css" />
        <link rel="stylesheet" href="css/5grid/core-noscript.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-desktop.css" />
        </noscript>
<script type="text/javascript">
  <!--
  if (screen.width <= 800) {
    window.location = "http://www.nibblecircle.com/mobile.php";
  }
  //-->
</script>


    </head>

 
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=779381238807795&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


 <!-- Nav -->
<div  style = "width:100%; height: 200px; padding-top: 10px;">
        <nav id="nav">
		
				 
	    <ul class="link" >
	<li style="float:left;"><a  href="index.php"><img src="img/nibblelogo.png" style="width:auto; height:100px;"></a></li>
             
				
           <div style="background-color:turquoise;height:2px;margin-top:7px;"></div>

            </ul>
       

			<ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="../">
						<img src="images/1.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Home</span>
							<span class="sdt_descr">NibbleCircle</span>
						</span>
					</a>
				</li>
				<li>
					<a href="../recipebook">
						<img src="images/3.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Recipe Book</span>
							<span class="sdt_descr">200+ curated</span>
						</span>
					</a>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=uiqkGV5Nf8c" target="_blank">
						<img src="images/2.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Inspiration</span>
							<span class="sdt_descr">Watch video</span>
						</span>
					</a>
				</li>
				<li>
					<a href ="http://www.syziggy.com">
						<img src="images/5.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">The Team</span>
							<span class="sdt_descr">Syziggy</span>
						</span>
					</a>
				</li>
				<li>
					<a href="../Contact">
						<img src="images/4.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Contact</span>
							<span class="sdt_descr">Get in touch</span>
						</span>
					</a>
				</li>
				<li>
					<a href="../Presskit.zip" target="_blank">
						<img src="images/6.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Resources</span>
							<span class="sdt_descr">Press kit</span>
						</span>
					</a>
					
				</li>
			</ul>
		</nav>
      



&nbsp;
</div>

<div  style = "width:100%; padding-top: 10px;">

<?php


$id = $_GET["id"]; 

$host = "localhost";
$user = "syzig7h4_root";
$passwd = "Acyborg#1";
$database = "syzig7h4_nibblecircle";
mysql_connect($host,$user,$passwd) or die (mysql_error());
mysql_select_db($database);

$query = "SELECT * FROM recipe WHERE recipe_id =$id";
$result = mysql_query($query) or die (mysql_error());

while ($row = mysql_fetch_array ($result))

{

echo '<div class = "place">';
echo "<p> <strong>".$row["name"]."</strong> </p>";
echo "<img  src = 'recipe/".$row["image"]."'>";
echo '<div class = "veg"> <p><img  src = "images/'.$row["type"].'.jpg">  &nbsp Category: '.$row["category"].' </p></div>';
echo '<br><div class = "veg"><p style = "margin-top: 20px;"><img  src = "images/timer.png">  &nbsp Cooking time:'.$row["cooktime"].' </p> </div>';
echo '<br><div class = "veg"> <p style = "margin-top: 20px;"><img  src = "images/pot.png">  &nbsp Serves:'.$row["serves"].' </p></div>';
echo '<div class = "veg"><p style = "margin-top: 20px;"><img  src = "images/noob.png">  &nbsp Level:'.$row["level"].'   </p></div>';

echo '</div> </div> <div class = "description"> <p> <b>Description: </b>'.$row["description"].'  </p> </div>';

$cat = $row["category"];
}



$query2 = "SELECT * FROM ingredients WHERE recipe_id =$id";
$result2 = mysql_query($query2) or die (mysql_error());

echo '<div class = "apppromo" ><p>';
echo '<table id = "ingredient">';
echo "<tr><b><td>Ingredients </td></b> <td></td><td></td></tr> ";

while ($row = mysql_fetch_array ($result2))

{

echo "<tr><td><img  src = 'ingredients/".$row["ingredients_image"]."'> </td><td> ".$row["name"]." </td><td>  ".$row["quantity"]."</td></tr>";


}
echo "</table>";
echo ' </p></div>';

echo '<div class = "apppromo" > <p> <b>Download the Nibble Circle App to get full directions to make this yummy recipe! </b> </p> <p><a href = "./Features"><img src="images/appstore.png" alt="" /> </p> </div>';


echo '<div class = "related" >';

$query3 = "SELECT * FROM recipe WHERE category = '$cat' ORDER BY RAND() LIMIT 3"; 
$result3 = mysql_query($query3) or die (mysql_error());


while ($row = mysql_fetch_array ($result3))

{

echo '<div class = "relatedimages" ><p><b> '.$row["name"].'  </b> </p> <p> <a href=view.php?id='.$row["recipe_id"].'> <img  src = "recipe/'.$row["image"].'" > </a></p></div>';


}

echo '</div>';


?>
<div> &nbsp </div>


<div class = "navigation" >

<?php


$id = $_GET["id"]; 
$idnext = $id +1;
$idback = $id -1;

echo '<p> <a href=view.php?id='.$idnext.'>Next</a> </p>';
echo '<p> <a href=view.php?id='.$idback.'>Back</a> </p>';
?>
</div>



<div> &nbsp </div>

<div class="fb-comments" data-href="http://www.nibblecircle.com/view.php?id=<?php echo $id; ?>" data-width="100%" data-numposts="5" data-colorscheme="dark"></div>
 <div id="foot" style = "background-color: #00A7A8;">

          
                 <center> <div>
	<p style="margin:0px;text-align:center;">
	<a href="https://www.nibblecircle.com"><font color="white" ><i>&copy; 2014 NibbleCircle </i></font> </a>
               </p></div></center>

   <center> <div>
	<p style="margin:0px;text-align:center;">
	<font color="white" >Visitors: <?php include "count.php"; ?></font>
               </p></div></center>
               
<div >
<ul class="social-buttons" >
<li><a href="https://in.linkedin.com/syziggy" class="social-btn"><i class="fa fa-linkedin"></i></a></li>
<li><a href="https://twitter.com/syziggy" class="social-btn"><i class="fa fa-twitter"></i></a></li>
<li><a href="https://facebook.com/syziggy" class="social-btn"><i class="fa fa-facebook"></i></a></li>
<li><a href="https://youtube.com/syziggy" class="social-btn"><i class="fa fa-youtube"></i></a></li>

</ul>

</div>
</div>

</body>
  <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
				/**
				* for each menu element, on mouseenter, 
				* we enlarge the image, and show both sdt_active span and 
				* sdt_wrap span. If the element has a sub menu (sdt_box),
				* then we slide it - if the element is the last one in the menu
				* we slide it to the left, otherwise to the right
				*/
                $('#sdt_menu > li').bind('mouseenter',function(){
					var $elem = $(this);
					$elem.find('img')
						 .stop(true)
						 .animate({
							'width':'170px',
							'height':'170px',
							'left':'0px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'140px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'170px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '170px';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-170px';
							$sub_menu.show().animate({'left':left},200);
						}	
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('.sdt_box');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0px');
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0px'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0px',
							'height':'0px',
							'left':'85px'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'25px'},500);
				});
            });
        </script>

</HTML>