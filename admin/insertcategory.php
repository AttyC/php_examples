<? 

//OPEN DATABASE CONNECTION
include('db.php');


$s=$_POST["Submit"];

if (isset ($s)) {
$CATEGORY  = $_POST["CATEGORY"];
$CATEGORY = str_replace("'", "&rsquo;", "$CATEGORY");
$CATIMG  = $_POST["IMAGE"];
$CATDESCR  = $_POST["CATDESCR"];
$CATDESCR = str_replace("'", "&rsquo;", "$CATDESCR");
$NOTES  = $_POST["NOTES"];
$NOTES = str_replace("'", "&rsquo;", "$NOTES");
$LIVE  = $_POST["LIVE"];

$pos = strrpos($CATIMG, "/");
$temp = substr($CATIMG, $pos);
$CATIMG = $temp;

$sql = "INSERT INTO category
(CATEGORY,CATIMG,CATDESCR,NOTES,LIVE) 
VALUES ('$CATEGORY','$CATIMG','$CATDESCR','$NOTES','$LIVE')";

mysql_query($sql) or die("Error, insert query failed:".mysql_error());

$ID = mysql_insert_id() ;

mysql_close();
}

else {}

echo '<div align="center"><b>Thanks - the category information for '.$CATEGORY.' has been added</b></div>';
echo '<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=addcategory.php">';

?>