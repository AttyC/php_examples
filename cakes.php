<?php
$ID = $_GET['id']; // gets category id
if (empty($ID))
	header ('Location:caketypes.php'); 
else {}
//STAGE 2 - LIST CAKES WITHIN THE SELECTED CATEGORY
include("includes/db.php");
include("includes/header.html");
$query="SELECT CATDESCR, CATEGORY FROM category WHERE ID = '$ID'";
   
	   $result = mysql_query ($query);
			while($nt=mysql_fetch_array($result))	{ 
			$CATDESCR = $nt[CATDESCR];
			$CATEGORY = $nt[CATEGORY];
			}
?>

<div id="main1"><div id="main2">

<? 
// left column
 include("includes/leftnav.php");
//right column
 include("includes/right.php");
?>
<div id="middle" align="left"><div class="column-in">

	   <?
	  
	  $CATEGORY = str_replace("'", "&rsquo;", "$CATEGORY");
//echo $CATEGORY; 

	  
	   $query="SELECT * FROM cakes WHERE CATEGORY = '$CATEGORY' and live = '1'";

	   $result = mysql_query ($query);
//echo $result; 
//if (!empty($result)){
	echo'<p class="smalllink"><a href="javascript: history.go(-1);" >&laquo; Back to all cakes</a></p><h1>'.$CATEGORY.'</h1>';
	
		echo'<div class="intro"><p>'.$CATDESCR.'</p>
		
		<p><img src="../images/Magnifying-Glass-16x16.png" alt="View larger image" title="View larger image" class="noborder"/> = View larger image</p>


		</div>';

	while($nt=mysql_fetch_array($result))	{ 
	
$ID = $nt[ID];
$NAME = $nt[NAME];
$IMAGE = $nt[IMG];
$DESCRIPTION = $nt[DESCRIPTION];	 
$PRICE  = $nt[PRICE];
$NOTES  = $nt[NOTES];

// for the popup id
$POPUP_ID = $ID;
 echo '
 
 <div class="cakediv">
		<h2>'.$NAME.'</h2>

	<div class="cakediv1">

<span id="'.$POPUP_ID.'" class="popup"><h2>'.$NAME.'</h2> 
<p class="smalllink">'.$CATEGORY.'</p>
	<img src="images/cakes/'.$IMAGE.'" class="img"/>
	<a class="smalllink" href="javascript:void(0);" onClick="HidePop(\''.$POPUP_ID.'\');">Close this Window</a>   
</span>

<img src="images/cakes/'.$IMAGE.'" width="80px" height="80px" class="img"/>
<a href="javascript:void(0);" onclick="ShowPop(\''.$POPUP_ID.'\');">
	<img src="../images/Magnifying-Glass-16x16.png" alt="View larger image" title="View larger image" class="noborder"/></a>

</div>
	<div class="cakediv2">
<p>'.$DESCRIPTION.'</p>
	<span class="smalllink">
<a href="enquiry.php?id='.$ID.'&name='.$NAME.'&image='.$IMAGE.'"  target="_self" >Ask us about '.$NAME.'</a></span></div></div>
';

}

	   ?>

        </div>


	</div>
	
	
	<div class="cleaner">&nbsp;</div>
     
</div>

</div>
<?php
include("includes/footer.html");
?>