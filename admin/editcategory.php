<?
//OPEN DATABASE CONNECTION
include('db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin</title>
<link rel="stylesheet" href="../css/css.css" type="text/css" media="screen" />
<script src="../js.js" type="text/javascript"></script>

<script language="javascript" type="text/javascript">

function searcher()
{
i=document.form1.CATEGORY.selectedIndex;
VAL=document.form1.CATEGORY.options[i].value;
location.href='editcategory.php?ID='+VAL;
}
</script>
</head>

<body>

<div id="content" style="padding-left:20px;">
  <h1>EDIT CAKE CATEGORY</h1>  

  <? include('../includes/adminnav.php'); ?> 

  <form id="form1" name="form1" method="post" action="amendcategory.php" onsubmit="return verifycategory();" >
      <table width="60%" border="0" cellpadding="3" cellspacing="3">
        <tr>
          <td>&nbsp;</td>
          <td> <select name="CATEGORY" id="CATEGORY" onchange="searcher();">
              <option value="">Please select</option>
              <? 
$query= "select * from category order by CATEGORY ASC";
$result = mysql_query ($query);

	while($nt=mysql_fetch_array($result)){ 
echo "<option value=\"$nt[ID]\">$nt[CATEGORY]</option>";

}	 
?>
</select></form>   
</td>
        </tr>
        <?
$ID = $_GET["ID"];

$query= "select * from category where ID = '$ID'";
$result = mysql_query ($query);

	while($nt=mysql_fetch_array($result)){ 
$ID  = $nt[ID];
$CATEGORY  = $nt[CATEGORY];
$CATDESCR  = $nt[CATDESCR];
$CATIMG = $nt[CATIMG];
$NOTES  = $nt[NOTES];
$LIVE  = $nt[LIVE];
}	 
		if ($ID !="") { echo '<form id="form" name="form" method="post" action="amendcategory.php" onsubmit="return verifylounge();">
      <input name="ID" type="hidden" value="'.$ID.'" />
	  <table width="70%" border="1" cellpadding="3" cellspacing="3">
        <tr>
          <td><div align="right" class="style2">Category:</div></td>
		 <td>
		  <input name="CATEGORY" type="text" id="CATEGORY" value="'.$CATEGORY.'" onblur="javascript:MakeTitleCase(this)" size="50" /></td>
    
        </tr>
        
		<tr>
          <td><div align="right"><strong>Image :</strong></div></td>
          <td>
		  <input name="CATIMG" type="hidden" id="CATIMG"  value="'.$CATIMG.'" size="25" />
		  <input name="CATIMGa" type="text" id="CATIMGa" value="'.$CATIMG.'" size="25"/>
		  
		  <a href="images.php" target="blank">Browse</a>
		  <img src="../images/cakes/'.$CATIMG.'" width="50" height="50" /> <strong>Image:'.$CATIMG.'
		  </strong><span style="font-size:12px;"><input type="checkbox" name="DEL1" value="1" /> remove</span></strong>
		  </td>
        </tr>
        		<tr>
          <td valign="top"><div align="right"><strong>Description :</strong></div></td>
          <td><textarea name="CATDESCR" type="text" id="CATDESCR" onblur="javascript:MakeTitleCase(this)" rows="4" cols="50">'.$CATDESCR.'</textarea></td>
        </tr>	
		<tr>
          <td valign="top"><div align="right"><strong>Notes :</strong></div></td>
          <td><textarea name="NOTES" type="text" id="NOTES" onblur="javascript:MakeTitleCase(this)" rows="4" cols="50">'.$NOTES.'</textarea></td>
        </tr>	
				<tr>
          <td><div align="right"><strong>Live:</strong></div></td>
          <td>';
		  
		  if ( $LIVE == "1" ) { echo '<input type="radio" name="LIVE" value="1" checked="checked" />'; } else {
          echo '<input type="radio" name="LIVE" value="1" />'; }
          echo'Yes &nbsp;';
		  
		  if ( $LIVE == "0" ) { echo '<input type="radio" name="LIVE" value="0" checked="checked" />'; } else {
          echo '<input type="radio" name="LIVE" value="0" />'; }
		  
            echo '
            No </td>
        </tr> 

		<tr>
          <td width="19%">&nbsp;</td>
          <td width="81%"><br />
          <input name="Submit" type="submit" value="Submit" /></td>
        </tr>
      </table>
    </form>';
		}
		else { } ?>
</div>
</div>


</div>
<? mysql_close (); ?>

</body>
</html>
