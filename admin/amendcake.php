<?

include "db.php";

$s=$_POST["Submit"];

if (isset ($s)) {

$ID  = $_POST["ID"];
$CATEGORY  = $_POST["CATEGORY"];
$CATEGORY = str_replace("'", "’", "$CATEGORY");
$NAME = $_POST['NAME'];
$IMAGE  = $_POST["IMAGE"];
$IMAGEa  = $_POST["IMAGEa"];
$DESCRIPTION  = $_POST["DESCRIPTION"];
$DESCRIPTION = str_replace("'", "’", "$DESCRIPTION");
$PRICE  = $_POST["PRICE"];
$DISPLAY  = $_POST["DISPLAY"];
$NOTES  = $_POST["NOTES"];
$NOTES = str_replace("'", "’", "$NOTES");
$LIVE  = $_POST["LIVE"];

$DEL = $_POST["DEL1"];


/* TEST TO SEE IF IMAGES HAVE BEEN UPDATED*/

if ($IMAGEa == "" && $IMAGE == "" ) //IF NO IMAGE PRESENT, SET DB ENTRY BLANK
	{$IMAGE ="";}
else if ($DEL == '1')
	{$IMAGE ="";}
else if ($IMAGEa != "")
	{$IMAGE = $IMAGEa;} //IF IMAGE IS UPDATED, ADD NEW IMAGE FOR DB ENTRY

$pos = strrpos($IMAGE, "/");
$temp = substr($IMAGE, $pos);
$IMAGE = $temp;


$query="UPDATE `delightsbycynthia_com`.`cakes` 

SET NAME = '$NAME', IMG = '$IMAGE', CATEGORY = '$CATEGORY', DESCRIPTION = '$DESCRIPTION', PRICE  = '$PRICE', DISPLAY = '$DISPLAY', NOTES = '$NOTES', LIVE = '$LIVE' WHERE `cakes`.`ID` = '$ID' ";  

$result = mysql_query ($query) or die("Could not connect >>> " . mysql_error());	} 
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADD OFFER</title>
<link href="../css/css.css" type="text/css" rel="stylesheet" />
<script language="JavaScript" type="text/javascript" src="/js.js"></script>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<div align="center"><span class="style1">
  <? mysql_close (); ?> 
  
The cake has been updated </span>
</div>
<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=editcake.php?ID=<? echo $ID; ?>">

</body>
</html>
