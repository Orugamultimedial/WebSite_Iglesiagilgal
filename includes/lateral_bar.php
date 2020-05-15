<?php 
$news = array();
$news = conseguirNoticias($connect);

?>
<link rel="stylesheet" href="./css/lateral_bar.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script src="main.js"></script>



<div id='lateral_bar'>
        <div style="margin-top:30%"></div>

        <?php
        for ($i=0; $i <= 4; $i++) {                  
                    $data = mysqli_fetch_assoc($news);

                    //verify
                    $id = trim($data['id']);
                    $category = trim($data['category']);
                    $title = trim($data['title']);
                    
                    $image = trim($data['image']);         
        ?>

                    <a href="#" class='news_link'>
                        <div class="news">
                            <div class="news_div_img">

                                <?php
                                    //verify images
                                    if(file_exists($image)){
                                    
                                        echo "<img src='$image' alt='news' class='news_img'>";

                                    }else{
                                        //no existe la imagen;
                                    };
                                ?> 

                            </div>
                            <h3 class='news_title'><?php echo $title ?></h3>  
                        </div>
                    </a>
                    <?php                             
                    }
                    ?>
  </div>
