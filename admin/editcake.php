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
i=document.form1.NAME.selectedIndex;
VAL=document.form1.NAME.options[i].value;
location.href='editcake.php?ID='+VAL;
}


</script>
</head>

<body>

<div id="content" style="padding-left:20px;">
  <h1>EDIT CAKE</h1>  

  <? include('../includes/adminnav.php'); ?> 

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <form id="form1" name="form1" method="post" action="amendcake.php" onsubmit="return verifycake();">
      <table width="80%" border="0" cellpadding="3" cellspacing="3" style="padding-left:5%;">
        <tr>
          <td>&nbsp;</td>
          <td> <select name="NAME" id="NAME" onchange="searcher();">
              <option value="">Please select</option>
              <? 
$query= "select * from cakes order by NAME ASC";
$result = mysql_query ($query);

	while($nt=mysql_fetch_array($result)){ 
echo "<option value=\"$nt[ID]\">$nt[NAME] ($nt[CATEGORY])</option>";

}	 
?>
</select></form>   
</td>
        </tr>
        <tr>
          <td></td>
          <td>&nbsp;</td>
        </tr>
        <?
$ID = $_GET["ID"];

$query= "select * from cakes where ID = '$ID'";
$result = mysql_query ($query);

	while($nt=mysql_fetch_array($result)){ 
$ID  = $nt[ID];
$CATEGORY  = $nt[CATEGORY];
$NAME  = $nt[NAME];
$IMAGE  = $nt[IMG];
//$THUMB  = $nt[THUMBIMG];
$DESCRIPTION  = $nt[DESCRIPTION];
$PRICE  = $nt[PRICE];
$DISPLAY  = $nt[DISPLAY];
$NOTES  = $nt[NOTES];
$LIVE  = $nt[LIVE];
}	 

		if ($ID !="") { echo '<form id="form" name="form" method="post" action="amendcake.php" onsubmit="return verifylounge();">
      <input name="ID" type="hidden" value="'.$ID.'" /><table width="70%" border="0" cellpadding="3" cellspacing="3" style="padding-left:5%;">
        <tr>
          <td><div align="right" class="style2">Category:</div></td>
		 <td>
		  <input name="CATEGORY" type="text" id="CATEGORY" value="'.$CATEGORY.'" onblur="javascript:MakeTitleCase(this)" size="50" /></td>
    
        </tr>
        <tr>
          <td><div align="right" class="style2">Cake Name:</div></td>
		  <td><input name="NAME" type="text" id="NAME" value="'.$NAME.'" onblur="javascript:MakeTitleCase(this)" size="50"/></td>
      
        </tr>
		<tr>
          <td><div align="right"><strong>Image :</strong></div></td>
          <td>
		  <input name="IMAGE" type="hidden" id="IMAGE"  value="'.$IMAGE.'" size="25" />
		  <input name="IMAGEa" type="text" id="IMAGEa" value="'.$IMAGE.'" size="25"/><a href="images.php" target="blank">Browse</a>
		  <img src="../images/cakes/'.$IMAGE.'" width="50" height="50" /> Image:'.$IMAGE.'
		  <span style="font-size:12px;"><input type="checkbox" name="DEL1" value="1" /> remove</span></strong>
		  </td>
        </tr>
        
		<tr>
          <td valign="top"><div align="right"><strong>Description :</strong></div></td>
          <td><textarea name="DESCRIPTION" type="text" id="DESCRIPTION" onblur="javascript:MakeTitleCase(this)" rows="4" cols="50">'.$DESCRIPTION.'</textarea></td>
        </tr> <tr>
          <td valign="top"><div align="right"><strong>Price :</strong></div></td>
          <td><input name="PRICE" type="text" id="PRICE" value="'.$PRICE.'" onblur="javascript:MakeTitleCase(this)" size="50"/></td>
        </tr>
		<tr>
          <td valign="top"><div align="right" class="style2"><strong>Display on right banner?:</strong></div></td>
          <td colspan="4">';
		  
		  
		   if ( $DISPLAY == "1" ) { echo '<input type="radio" name="DISPLAY" value="1" checked="checked" />'; } else {
          echo '<input type="radio" name="DISPLAY" value="1" />'; }
          echo'Yes &nbsp;';
		  
		  if ( $DISPLAY == "0" ) { echo '<input type="radio" name="DISPLAY" value="0" checked="checked" />'; } else {
          echo '<input type="radio" name="DISPLAY" value="0" />'; }
		  
            echo '
            No 
</td>
		</tr>
		
		<!--<tr>
          <td><div align="right"><strong>Chidren:</strong></div></td>
          <td>';
		  
		  if ( $CHILDREN == "1" ) { echo '<input type="radio" name="CHILDREN" value="1" checked="checked" />'; } else {
          echo '<input type="radio" name="CHILDREN" value="1" />'; }
          echo'Yes &nbsp;';
		  
		  if ( $CHILDREN == "0" ) { echo '<input type="radio" name="CHILDREN" value="0" checked="checked" />'; } else {
          echo '<input type="radio" name="CHILDREN" value="0" />'; }
		  echo '
            No </td>
        </tr>-->
				   
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
