
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Welcome to NibbleCircle recipe book</title>
        <link rel="stylesheet" type="text/css" href="stylesheetmobile.css" />
<link rel="stylesheet" type="text/css" href="viewstylemobile.css" />
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/style2mobile.css" type="text/css" media="screen"/>


    </head>
    <body>

<div id="banner">
<div id="title">
Explore Indian cuisines
<p>Discover India </p>
<form method="get" action="/search.php" id="search">
  <input name="q" type="text" size="40" placeholder="Search..." />
</form>

</div>

</div>

<div id="menubar">
			<ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="../mobile.php">
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
							<span class="sdt_link">Recipe book</span>
							<span class="sdt_descr"> 200+ recipes</span>
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
				
				</li>
			</ul>
		</div>
      



<div>

<div id="sidebar">
<h2> Download NibbleCircle App</h2>

<p> The gorgeous mobile app is equipped with semantic search, grocery manager, social sharing, gamified experience & a lot more.. </p>
<p> &nbsp </p>
<p><a href = "http://www.syziggy.com"><img src="images/appstore.png" alt="" /> </p>


</div>

<div id="content_area">


<?php
$host = "localhost";
$user = "syzig7h4_root";
$passwd = "Acyborg#1";
$database = "syzig7h4_nibblecircle";
mysql_connect($host,$user,$passwd) or die (mysql_error());
mysql_select_db($database);

$query = "SELECT * FROM recipe ORDER BY RAND() LIMIT 24 ";
$result = mysql_query($query) or die (mysql_error());


while ($row = mysql_fetch_array ($result))

{
$string = substr($row["description"],0,100).'...';

echo "<div id = 'contentTable'>";

echo "<div id = 'contentimage'> <a href=viewmobile.php?id=".$row["recipe_id"]."><img src = 'recipe/".$row["image"]."'></div>";

echo "<div id = 'contenttitle'>  <span class='aligner'></span> <span class = 'align'><a href=viewmobile.php?id=".$row["recipe_id"].">".$row["name"]."</span></div>";

echo "<div id = 'contentdesc'>".$string."</div>";

echo "</div>";


}


?>
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



</html>




