<?php

$title = $_POST['titleNew'];
$subtitle = $_POST['subtitleNew'];
$text = $_POST['textNew'];
$author = $_POST['authorNew'];
$image = $_POST['imageNew'];
$tags = $_POST['tagsNew'];


$sql = "UPDATE `articles` SET title='$title', subtitle='$subtitle', date=CURDATE(), text='$text', author='$author',image='$image',tags='$tags' WHERE id='$id'";
$modify = mysqli_query($conection_db, $sql);

echo $title 
$subtitle
$text
$author 
$image
$tags

/*header( "Location./administration.php");*/

?>