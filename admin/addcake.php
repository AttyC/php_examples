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

</head>

<body>


<div id="leftcontent"> 
</div>

<div id="content" style="padding-left:20px;">
  <h1>ADD CAKE</h1>
  
  <? include('../includes/adminnav.php'); ?> 

  <form id="form" name="form" method="post" action="insertcake.php" onsubmit="return verifycake();">
    <table width="80%" border="0" cellpadding="3" cellspacing="0">
      <tr>
        <td><div align="right" class="style2">Cake Name :</div></td>
        <td colspan="4"><input name="NAME" type="text" id="NAME" onblur="javascript:MakeTitleCase(this)" size="50"/></td>
      </tr>
      <tr>
        <td><div align="right" class="style2">Category:</div></td>
        <td colspan="4"><select name="CATEGORY" id="CATEGORY" >
            <option value="">Please select</option>
            <? 				
				
$query= "select DISTINCT CATEGORY from category order by CATEGORY ASC";
$result = mysql_query ($query);
while($r=mysql_fetch_array($result))
{	
  					echo "<option value=\"$r[CATEGORY]\" >$r[CATEGORY]</option>";}
								
					?>
          </select>
          
        </td>
      </tr>
      <tr>
        <td valign="top"><div align="right"><strong>Description:</strong></div></td>
        <td colspan="4"><textarea name="DESCRIPTION" type="text" id="DESCRIPTION" onblur="javascript:MakeTitleCase(this)" rows="4" cols="60"></textarea></td>
      </tr>
     
      <tr>
        <td valign="top"><div align="right"><strong>Image:</strong></div></td>
        <td colspan="4"><input name="IMAGE" type="text" id="IMAGE" size="35"/>
            <a href="images.php" target="blank">Browse</a>
        </td>
      </tr>
    
      <tr>
        <td valign="top"><div align="right" class="style2"><strong>Price from:</strong></div></td>
        <td colspan="4"><input name="PRICE" type="text" id="PRICE" /></td>
      </tr>
      <tr>
        <td valign="top"><div align="right" class="style2"><strong>Display on right banner?:</strong></div></td>
        <td colspan="4"><p>
            <label>
            <input type="radio" name="DISPLAY" value="1" />
              Yes</label>
            <label>
            <input type="radio" name="DISPLAY" value="0" />
              No</label>
          (tick to show on the home page, maximum 3 products at a time). <br />
        </p></td>
      </tr>
      <tr>
        <td valign="top"><div align="right" class="style2">
            <p>Includes/notes<br />
            </p>
        </div></td>
        <td colspan="4"><textarea name="NOTES" cols="50" rows="5" id="NOTES"></textarea></td>
      </tr>
      <tr>
        <td valign="top"><div align="right" class="style2"><strong>Live:</strong></div></td>
        <td colspan="4"><p>
            <label>
            <input type="radio" name="LIVE" value="1" />
              Yes</label>
            <label>
            <input type="radio" name="LIVE" value="0" />
              No</label>
          (tick yes to show on the site, no to hide from the site) <br />
        </p></td>
      </tr>
      <tr>
        <td width="20%">&nbsp;</td>
        <td width="80%" colspan="4"><br />
            <input name="Submit" type="submit" class="style1" value="Submit" /></td>
      </tr>
    </table>
  </form>
    <p>&nbsp;</p>
</div>
</div>


</div>
<?  mysql_close(); ?>
</body>
</html>
