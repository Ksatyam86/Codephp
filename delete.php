<?php

include 'header.php';

$delete_id=$_REQUEST['did'];

$obj->delete('students',"id='$delete_id'");

header("Location:index.php");

 ?>