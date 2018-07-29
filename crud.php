<?php

include_once 'db.php';

/* code for data insert */
if(isset($_POST['save']))
{

     $fist_name=$connection->real_escape_string($_POST['first_name']);
     $last_name=$connection->real_escape_string($_POST['last_name']);

     $query=$connection->query("INSERT INTO data(first_name,last_name) VALUES ('$fist_name','$last_name')");

	 
	 if(!$query)
	 {
		 echo $connection->error;
	 } 
}
/* code for data insert */


/* code for data delete */
if(isset($_GET['delete']))
{
    $query= $connection->query("DELETE FROM data WHERE id=".$_GET['delete']);
    header("Location: index.php");
}
/* code for data delete */



/* code for data update */
if(isset($_GET['edit']))
{
	$query = $connection->query("SELECT * FROM data WHERE id=".$_GET['edit']);
    $getROW=$query->fetch_array();

}

if(isset($_POST['update']))
{
    $query=$connection->query("UPDATE data SET first_name='".$_POST['first_name']."', last_name='".$_POST['last_name']."' WHERE id=".$_GET['edit']);
	header("Location: index.php");
}
/* code for data update */

?>