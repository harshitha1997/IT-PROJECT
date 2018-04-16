<?php @
$db_host="localhost";
$db_user="root";
$db_passwd="tiger";
$db_name="2015cse050";
$dbh=mysqli_connect($db_host,$db_user,$db_passwd,$db_name)or die("Error connecting to the database");
$q="select * from vote";
echo "<br />";
$r=mysqli_query($dbh,$q)or die("Error querying the database");
echo '<form id="myform">';
while($v=mysqli_fetch_array($r,MYSQLI_ASSOC)){
echo '<input type="radio" id="username"  name="password" value="'.$v['name'].'">'.$v['name'].'</input><br />';
}
echo '</form>';
?>

