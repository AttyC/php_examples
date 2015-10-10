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
<style type="text/css">
<!--
.style1 {font-weight: bold}
.style2 {font-weight: bold}
-->
</style>
</head>

<body>


<div id="leftcontent"> 
</div>

<div id="content" style="padding-left:20px;">
  <h1>ADD NEW CAKE CATEGORY</h1>
  <p>On this page, add a new <strong>category</strong> of cake (e.g. Teatime Cakes, Cupcakes). </p>
  <p>Then go to Add Cake and add cakes of this type. </p>
  <? include('../includes/adminnav.php'); ?> 

  <form id="form" name="form" method="post" action="insertcategory.php" >
      <table width="80%" border="0" cellpadding="3" cellspacing="0">
       
        <tr>
          <td><div align="right" class="style2"><strong>Category:</strong></div></td>
          <td colspan="4"><input name="CATEGORY" type="text" id="CATEGORY" onblur="javascript:MakeTitleCase(this)" size="30"/>
            (include the full name e.g. Teatime Cakes or Cupcakes) </td>
        </tr>
        <tr>
          <td valign="top"><div align="right"><strong>Description:</strong></div></td>
          <td colspan="4"><textarea name="CATDESCR" type="text" id="CATDESCR" onblur="javascript:MakeTitleCase(this)" rows="4" cols="60"></textarea></td>
        </tr>
        
		
        <tr>
          <td valign="top"><div align="right"><strong>Image:</strong></div></td>
          <td colspan="4"><input name="IMAGE" type="text" id="IMAGE" size="35"/>
	<a href="images.php" target="blank">Browse</a> </td>
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
          <td valign="top"><div align="right" class="style2">
            <p>Includes/notes<br />
            </p>
          </div></td>
          <td colspan="4"><textarea name="NOTES" cols="50" rows="5" id="NOTES"></textarea></td>
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
