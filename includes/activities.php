<?php
$categories = array();
$categories = conseguirActividades($connect);

?>
<link rel="stylesheet" href="./css/activities.css">
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
                            <div id="div_article_header">

                            <?php
                                //verify images
                                if(file_exists($image)){
                                
                                    echo "<img src='$image'>";

                                }else{
                                    //no existe la imagen;
                                };
                            ?>   
                                <div id="div_article_header_info">
                                    <h1><?php echo $title ?></h1>
                                    <h2><?php echo $subtitle ?></h2>
                                    <h5><?php echo $date ?></h5> 
                                </div> 
                                
                            </div>
                            <div id="div_article_info">
  
                                <span><?php echo $text ?></span>
                                <h4><?php echo $tags ?></h4>
                                <h3><?php echo $author ?></h3>
                            </div>

                            </li>
                        </ul>
                    
                    <?php
                    }
                    ?>
    </div>