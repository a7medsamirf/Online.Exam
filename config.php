<?php
$con = mysql_connect ("localhost" , "root" ,"","exam");
if(!$con)
{
die('could not connect :' .mysql_error());
}

if($con)
?>