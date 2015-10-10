<div id="right">

	<div class="column-in">
	
	<div id="recent" align="center">
		<h2>Recent Creations</h2>
		
		<?
		include("includes/db.php");
	   $query="SELECT * FROM cakes WHERE DISPLAY = '1' ";
   
	   $result = mysql_query ($query);
	while($nt=mysql_fetch_array($result))	{ 
	$ID = $nt[ID];
	$NAME = $nt[NAME];
	$IMAGE = $nt[IMG];
	$CATRIGHT= $nt[CATEGORY];
	$POPUP_ID = $ID;

		echo '

<span id="'.$POPUP_ID.'" class="popup"><h2>'.$NAME.'</h2> 
<p class="smalllink">'.$CATEGORY.'</p>
	<img src="images/cakes/'.$IMAGE.'" class="img"/>
	<a class="smalllink" href="javascript:void(0);" onClick="HidePop(\''.$POPUP_ID.'\');">Close this Window</a>   
</span>

<img src="images/cakes/'.$IMAGE.'" width="80px" height="80px" class="img"/>
<p>
<a href="javascript:void(0);" onclick="ShowPop(\''.$POPUP_ID.'\');">
	<img src="../images/Magnifying-Glass-16x16.png" alt="View larger image" title="View larger image" class="noborder"/>
	</a>
	<a href="enquiry.php?id='.$ID.'&name='.$NAME.'&image='.$IMAGE.'"  target="_self" title="Enquire about '.$NAME.'">'.$NAME.'</a>
</p>
		 ';
		}
	   ?>
      </div>
		<!--<p><a href="signup.php" target="_self" alt="Sign up for our newsletter"><img src="../images/banners/signup.jpg" alt="sign up" title="Sign up for our newsletter" border="none" class="signup" /></a>	</p>-->
		
		<div class="nav-menu"><p>Tel: 020 7278 6872 </p>
  <p>  <a href="mailto:delightful.cynthia@live.co.uk" target="_blank">Email us</a>
      
      </p></div>
		
	<div id="social"><p>Share this site:</p>

  <a target="_blank" class="digg" href="http://digg.com/submit?phase=2&amp;url=http://www.delightsbycynthia.com/"/>
  
    <img src="http://digg.com/img/badges/16x16-digg-guy.gif" width="16" height="16" alt="Digg!" />
    </a><a href="http://www.reddit.com/submit" onclick="window.location = 'http://www.reddit.com/submit?url=' + encodeURIComponent(window.location); return false"> <img src="http://www.reddit.com/static/spreddit1.gif" alt="submit to reddit" border="0" /> </a>
    <script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script>
    <a href="http://www.facebook.com/share.php?u=<url>" onclick="return fbs_click()" target="_blank"><img src="http://b.static.ak.fbcdn.net/images/share/facebook_share_icon.gif?7:26981" alt="" /></a>
<a target="_blank" class="digg" href="http://digg.com/submit?phase=2&amp;url=http://www.delightsbycynthia.com/"/>
<img border=0 src="http://cdn.stumble-upon.com/images/16x16_su_3d.gif" alt=""></a><a href="http://www.twitter.com/DelightsbyC"><img src="http://twitter-badges.s3.amazonaws.com/t_mini-b.png" alt="Follow Delights by Cynthia on Twitter"/></a></div>
  </div>
	</div>