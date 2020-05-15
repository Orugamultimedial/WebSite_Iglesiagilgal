<?php
function conseguirArticulos($conection_db){
    
    $sql = "SELECT * FROM articles WHERE category ='jovenes' ORDER BY date DESC;";
    $categoryArticles = mysqli_query($conection_db, $sql);

    $result = array();

    if($categoryArticles && mysqli_num_rows($categoryArticles) >= 1){
        $result = $categoryArticles;
    };
    return $result;
}

function conseguirActividades($conection_db){
    
    $sql = "SELECT * FROM articles WHERE category ='actividades' ORDER BY date DESC;";
    $categoryActivities = mysqli_query($conection_db, $sql);

    $result = array();

    if($categoryActivities && mysqli_num_rows($categoryActivities) >= 1){
        $result = $categoryActivities;
    };
    return $result;
}

function conseguirAgenda($conection_db){
    
    $sql = "SELECT * FROM schedule WHERE tags = 'info' ";
    $day = mysqli_query($conection_db, $sql);  
    
    $result = array();

    if($day && mysqli_num_rows($day) >= 1){
        $result = $day;
    };
    return $result; 
}

function conseguirNoticias($conection_db){
    
    $sql = "SELECT * FROM articles ORDER BY date DESC;";
    $categoryArticles = mysqli_query($conection_db, $sql);

    $result = array();

    if($categoryArticles && mysqli_num_rows($categoryArticles) >= 1){
        $result = $categoryArticles;
    };
    return $result;
}

function conseguirUrl($conection_db){
    
    $sql = "SELECT * FROM streaming ";
    $url = mysqli_query($conection_db, $sql);

    $result = array();

    if($url && mysqli_num_rows($url) >= 1){
        $result = $url;
    };
    return $result;
}

function closeSession(){
    
    if(isset($_SESSION['user'])){
        session_destroy();
    }
}

?>