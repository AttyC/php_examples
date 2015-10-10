<?php
//STAGE 1 - LISTS ALL CAKES BY CATEGORY
include("includes/db.php");
include("includes/header.html");
?>

<div id="main1"><div id="main2">

<?
// left column
 include("includes/leftnav.php");
//right column
 include("includes/right.php");
?>

<div id="middle" align="left"><div class="column-in">
		<h1>Cakes</h1>
<h2>Here’s a super selection of cakes to desire and inspire you.  Choose from</h2>

<ul class="cakelist">
<li>Vanilla Sponge with Vanilla Buttercream (jam filling optional)</li>

 <li> Sponge with Chocolate Buttercream</li>
 <li>Rich Chocolate (so rich it doesn’t need a filling)</li>
 <li>Lemon Drizzle with Lemon Curd or Lemon Buttercream</li>
 <li>Orange & Poppy Seed with Orange Buttercream.   Plus many more...</li>
</ul>


       <?
	   $query="SELECT * FROM category WHERE LIVE = '1' ORDER BY PRIORITY ASC";
	   $result = mysql_query ($query);
	$i = 0;
	while($nt=mysql_fetch_array($result)){ 
$ID = $nt[ID];
$PRIORITY = $nt[PRIORITY];
$CATEGORY = $nt[CATEGORY] ;
$CATIMG = $nt[CATIMG];
$CATEGORY = str_replace("'", "&rsquo;", $CATEGORY);
$CATEGORY = str_replace("\\", "", $CATEGORY);

echo '<div class="caketype">
	<a href="cakes.php?id='.$ID.'&type='.$CATEGORY.'" target="_self" >
		<img src="images/cakes/'.$CATIMG.'" width="80px" height="80px" align="bottom" /></a>
		
	<div class="sub"><h2><a href="cakes.php?id='.$ID.'&type='.$CATEGORY.'" target="_self" >'.$CATEGORY.'&nbsp;&rsaquo;&rsaquo;</a></h2>
	</div>
	
	</div>


';

$i++;
	
	}

	   ?>
	   
	 
        </div>
	</div>

	<div class="cleaner">&nbsp;</div>

</div></div>
<?php
include("includes/footer.html");
?>