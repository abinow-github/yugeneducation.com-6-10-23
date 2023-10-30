<?php
//include database configuration file
include("root/db.php");
$ids		 =	 mysqli_real_escape_string($mysqli, $_POST['id']); 


 if(!empty($_FILES['img1']['tmp_name']))
   {
$temp1 = explode(".",$_FILES["img1"]["name"]);
$newfilename1 = rand(). "_".date('m-d-Y_hia') . '.' .end($temp1);
move_uploaded_file($_FILES['img1']['tmp_name'],"gallery/".$newfilename1);
$img1=$newfilename1;
$sql = "UPDATE blog SET
image            =     '$img1'

WHERE id='$ids'";


if (!mysqli_query($mysqli,$sql)) {
   die('Error: ' . mysqli_error($mysqli));
}
   }

$title		 = 	mysqli_real_escape_string($mysqli , $_POST['title']);
$description		 = 	mysqli_real_escape_string($mysqli , $_POST['description']);
$name		 = 	mysqli_real_escape_string($mysqli , $_POST['name']);
$date		 = 	mysqli_real_escape_string($mysqli , $_POST['date']);
$content		 = 	mysqli_real_escape_string($mysqli , $_POST['content']);

$pg_tlt		 = 	mysqli_real_escape_string($mysqli , $_POST['pg_tlt']);
$keyword		 = 	mysqli_real_escape_string($mysqli , $_POST['keyword']);
$meta_dcr		 = 	mysqli_real_escape_string($mysqli , $_POST['meta_dcr']);



$sql		    =	"UPDATE blog SET

title	    =	  '$title',
description	    =	  '$description',
author	    =	  '$name',
date	    =	  '$date',
content	    =	  '$content',
pg_tlt	    =	  '$pg_tlt',
keyword	    =	  '$keyword',
meta_dcr	    =	  '$meta_dcr'

	WHERE id='$ids'";    	   
  

   if (!mysqli_query($mysqli,$sql)) {
  die('Error: ' . mysqli_error($mysqli));
}
header("location:blog.php?pro=$menu");
   ?>