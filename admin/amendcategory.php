<?

include "db.php";

$s=$_POST["Submit"];

if (isset ($s)) {

$ID  = $_POST["ID"];
$CATEGORY  = $_POST["CATEGORY"];
$CATIMG  = $_POST["CATIMG"];
$CATIMGa  = $_POST["CATIMGa"];
$CATDESCR  = $_POST["CATDESCR"];
$CATDESCR = str_replace("'", "&rsquo;", "$CATDESCR");
$NOTES  = $_POST["NOTES"];
$NOTES = str_replace("'", "&rsquo;", "$NOTES");
$LIVE  = $_POST["LIVE"];

/* TEST TO SEE IF IMAGES HAVE BEEN UPDATED*/

if ($CATIMGa == "" && $CATIMG == "" | $DEL1 == "1") //IF NO IMAGE PRESENT, SET DB ENTRY BLANK
	{$CATIMG ="";}
else if ($CATIMGa != "")
	{$CATIMG = $CATIMGa;} //IF IMAGE IS UPDATED, ADD NEW IMAGE FOR DB ENTRY

$pos = strrpos($CATIMG, "/");
$temp = substr($CATIMG, $pos);
$CATIMG = $temp;

$query="UPDATE `delightsbycynthia_com`.`category` 

SET CATIMG = '$CATIMG', CATDESCR = '$CATDESCR', NOTES = '$NOTES', LIVE = '$LIVE' WHERE `category`.`ID` = '$ID' ";  

$result = mysql_query ($query) or die("Could not connect >>> " . mysql_error());	} 
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>AMEND CATEGORY</title>
<link href="../css/css.css" type="text/css" rel="stylesheet" />
<script language="JavaScript" type="text/javascript" src="/js.js"></script>
</head>

<body>
<div align="center"><span class="style1">
  <? mysql_close (); ?> 
  
The cake type has been updated </span>
</div>
<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=editcategory.php?ID=<? echo $ID; ?>">

</body>
</html>
