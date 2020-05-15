<?php
require('../services/conection_db.php');
$idNew = $_GET['idNew'];
$titleNew = $_GET['titleNew'];
$subtitleNew = $_GET['subtitleNew'];
$textNew = $_GET['textNew'];
$authorNew = $_GET['authorNew'];
$imageNew = $_GET['imageNew'];
$tagsNew = $_GET['tagsNew'];

$sql = "UPDATE articles SET title='$titleNew', subtitle='$subtitleNew', date=CURDATE(), text='$textNew', author='$authorNew', image='$imageNew', tags='$tagsNew' WHERE id='$idNew'";
    
$modify = mysqli_query($connect, $sql);

$status = true;

echo "salio bien $idNew";
?>