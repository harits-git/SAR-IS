<?php
//require("koneksi.php");
 
function parseToXML($htmlStr)
 
{
 
$xmlStr=str_replace('<','&lt;',$htmlStr);
 
$xmlStr=str_replace('>','&gt;',$xmlStr);
 
$xmlStr=str_replace('"','&quot;',$xmlStr);
 
$xmlStr=str_replace("'",'&#39;',$xmlStr);
 
$xmlStr=str_replace("&",'&amp;',$xmlStr);
 
return $xmlStr;
 
}
 
// Opens a connection to a MySQL server
/* 
$connection=mysql_connect ("localhost", "root", "");
 
if (!$connection) {
 
die('Not connected : ' . mysql_error());
 
}
 
// Set the active MySQL database
 
$db_selected = mysql_select_db("sar");
 
if (!$db_selected) {
 
die ('Can\'t use db : ' . mysql_error());
 
}
 
// Select all the rows in the markers table
 
$query = "SELECT * FROM markers WHERE 1";
 
$result = mysql_query($query);
 
if (!$result) {
 
die('Invalid query: ' . mysql_error());
 
}
*/

$result=$db->execute("SELECT * FROM markers WHERE 1");
 
header("Content-type: text/xml");
 
// Start XML file, echo parent node
 
echo '<markers>';
 
// Iterate through the rows, printing XML nodes for each
 
while (!$result->EOF){
 
    // ADD TO XML DOCUMENT NODE
     
    echo '<marker ';
     
    echo 'kejadian="' . parseToXML($result->fields["kejadian"]) . '" ';
     
    echo 'keterangan="' . parseToXML($result->fields["keterangan"]) . '" ';
     
    echo 'lat="' . $result->fields["lat"] . '" ';
     
    echo 'lng="' . $result->fields["lng"] . '" ';
     
    echo 'tipe="' . $result->fields["tipe"] . '" ';
     
    echo '/>';
     
    $result->MoveNext();
}
 
// End XML file
 
echo '</markers>';
 
?>