<?php
session_start();
if(isset($_SESSION['user'])){
    $userLogged = true;
}else{
    $userLogged = false;
};

include('./header.php');
include('./social_buttons.php');
include('../helpers.php');

$url = array();
$url = conseguirUrl($connect);

$data = mysqli_fetch_assoc($url);

//verify
$urlNew = trim($data['url']);
?>

<div >
    <?php echo $urlNew ?>
</div>

