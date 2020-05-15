<?php
$categories = array();
$categories = conseguirArticulos($connect);

?>
<link rel="stylesheet" href="./css/articles.css">
    <div id='container_article'>
        <?php    

        for ($i=0; $i < mysqli_num_rows($categories); $i++) {                  
                    $data = mysqli_fetch_assoc($categories);

                    //verify
                    $id = trim($data['id']);
                    $category = trim($data['category']);
                    $title = trim($data['title']);
                    $subtitle = trim($data['subtitle']);
                    $date = trim($data['date']);
                    $text = trim($data['text']);
                    $author = trim($data['author']);
                    $text = trim($data['text']);
                    $tags = trim($data['tags']);
                    
                    $image = trim($data['image']);
                    $image2 = trim($data['image2']);          
                    ?>


                        <ul>
                            <li id='article'>
                            <div id="div_article_info">
                                <h1><?php echo $title ?></h1>
                                <h2><?php echo $subtitle ?></h2>
                                <h5><?php echo $date ?></h5>
                                <span><?php echo $text ?></span>
                                <h4><?php echo $tags ?></h4>
                                
                            </div>
                            <div id="div_article_img">

                                <?php
                                    //verify images
                                    if(file_exists($image)){
                                    
                                        echo "<img src='$image'>";

                                    }else{
                                        //no existe la imagen;
                                    };

                                    if(file_exists($image2)){
                                        
                                        echo "<img src='$image2'>";

                                    }else{
                                        //no existe la imagen;
                                    }
                                ?>                        
                                
                            </div>
                            </li>
                        </ul>
                    
                    <?php
                    }
                    ?>
    </div>