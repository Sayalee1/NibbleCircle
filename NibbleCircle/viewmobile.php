


<HTML>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Welcome to NibbleCircle recipe book</title>
        <link rel="stylesheet" type="text/css" href="stylesheetmobile.css" />
<link rel="stylesheet" type="text/css" href="viewstylemobile.css" />
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/style2mobile.css" type="text/css" media="screen"/>
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


    </head>
<body>

  <!-- FB box-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=779381238807795&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


  <!-- Nav -->
        <nav id="nav">
		
				 
	    <ul class="link">
	<li style="float:left;"><a  href="index.php"><img src="images/nibblelogo.png" style="width:172px; height:30px;"></a></li>
              
				
           <div style="background-color:turquoise;height:2px;margin-top:7px;"></div>

            </ul>
        </nav>
<div id="menubar">
			<ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="mobile.php">
						<img src="images/1.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Home</span>
							<span class="sdt_descr">Go back to homepage</span>
						</span>
					</a>
				</li>
				<li>
					<a href="../mobile.php">
						<img src="images/3.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Mobile App</span>
							<span class="sdt_descr">Check out the app</span>
						</span>
					</a>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=uiqkGV5Nf8c" target="_blank">
						<img src="images/2.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Inspiration</span>
							<span class="sdt_descr">How was the idea born?</span>
						</span>
					</a>
				</li>
				<li>
					<a href ="http://www.syziggy.com">
						<img src="images/5.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">The Team</span>
							<span class="sdt_descr">The parent company</span>
						</span>
					</a>
				</li>
				<li>
					<a href="../contactmobile.php">
						<img src="images/4.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Contact</span>
							<span class="sdt_descr">Get in touch with us</span>
						</span>
					</a>
				</li>
				<li>
					<a href="../Presskit.zip" target="_blank">
						<img src="images/6.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Resources</span>
							<span class="sdt_descr">Press kit and more</span>
						</span>
					</a>
					<div class="sdt_box">
						<a href="../Presskit.zip" target="_blank">Press kits</a>
						<a href="/Infographics">Infographics</a>
					</div>
				</li>
			</ul>
		</div>




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
echo '<div class = "veg"> <p><img  src = "images/'.$row["type"].'.jpg">  &nbsp Category: '.$row["category"].' </p>';

echo '</div> <div class = "veg"> <p><img  src = "images/timer.png">  &nbsp Cooking time:'.$row["cooktime"].' </p> </div>';

echo '<div class = "veg"> <p><img  src = "images/pot.png">  &nbsp Serves:'.$row["serves"].' </p>';

echo '<p style = "margin-left: 10px;"><img  src = "images/noob.png">  &nbsp Level:'.$row["level"].'   </p>';

echo '</div> </div> <div class = "description"> <p> <b>Description: </b>'.$row["description"].'  </p> </div>';


}

$query2 = "SELECT * FROM ingredients WHERE recipe_id =$id";
$result2 = mysql_query($query2) or die (mysql_error());

echo '<table id = "ingredient">';
echo "<th> INGREDIENTS </th> ";

while ($row = mysql_fetch_array ($result2))

{

echo "<tr><td>".$row["name"]."</td><td>".$row["quantity"]."</td></tr>";


}
echo "</table>";

?>

<div class = "apppromo" >

<p> <b>Download the Nibble Circle App to get full directions to make this yummy recipe! </b> </p>
<p><a href = "./Features"><img src="images/appstore.png" alt="" /> </p>

</div>

<div> &nbsp </div>

<div class="fb-comments" data-href="http://www.nibblecircle.com/view.php?id=<?php echo $id; ?>" data-width="100%" data-numposts="5" data-colorscheme="dark"></div>

 <div class="foot">
            
                 <center> <div>
						<p style="margin:0px;text-align:center;">
							<font color="white" ><i>&copy; 2014 NibbleCircle</i></font>
						</p></center>



                    </div>
               </div>
     
</div>

<div >
<ul class="social-buttons">
<li><a href="https://in.linkedin.com/syziggy" class="social-btn"><i class="fa fa-linkedin"></i></a></li>
<li><a href="https://twitter.com/syziggy" class="social-btn"><i class="fa fa-twitter"></i></a></li>
<li><a href="https://facebook.com/syziggy" class="social-btn"><i class="fa fa-facebook"></i></a></li>
<li><a href="https://youtube.com/syziggy" class="social-btn"><i class="fa fa-youtube"></i></a></li>

</ul>

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