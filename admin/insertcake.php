<? 

//OPEN DATABASE CONNECTION
include('db.php');


$s=$_POST["Submit"];

if (isset ($s)) {
$ID  = $_POST["ID"];
$CATEGORY  = $_POST["CATEGORY"];
$NAME  = $_POST["NAME"];
$IMAGE  = $_POST["IMAGE"];
$DESCRIPTION  = $_POST["DESCRIPTION"];
$DESCRIPTION = str_replace("'", "&rsquo;", "$DESCRIPTION");
$PRICE  = $_POST["PRICE"];
$DISPLAY  = $_POST["DISPLAY"];
$NOTES  = $_POST["NOTES"];
$NOTES = str_replace("'", "&rsquo;", "$NOTES");
$LIVE  = $_POST["LIVE"];
// remove path from image
$pos = strripos($IMAGE, '\\');
$IMAGE = substr($IMAGE, $pos);


$sql = "INSERT INTO cakes
(CATEGORY,NAME,IMG,DESCRIPTION,PRICE,NOTES, DISPLAY, LIVE) 
VALUES ('$CATEGORY','$NAME','$IMAGE','$DESCRIPTION','$PRICE','$NOTES','$DISPLAY','$LIVE')";

mysql_query($sql) or die("Error, insert query failed:".mysql_error());

$ID = mysql_insert_id() ;

mysql_close();
}

else {}

echo '<div align="center"><b>Thanks - the cake information for '.$NAME.' has been added</b></div>';
echo '<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=addcake.php">';

?>