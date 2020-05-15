<?php
$categories = array();
$categories = conseguirActividades($connect);

?>
<link rel="stylesheet" href="./css/modify_activities.css">
<link rel="stylesheet" href="./css/activities.css">
<div id="container_existingactivities">
    
    <div id='container_article'>
    <button class='buttons'>Crear</button>
        <ul>
            <?php    

            for ($i=0; $i < mysqli_num_rows($categories); $i++) {                  
                        $data = mysqli_fetch_assoc($categories);
                    

                        //verify
                        $id = $data['id'];
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

                    
                        
                            
                            <li id='article'>

                                <form action="./includes/save_modification.php" method="get">

                                    <input type="number" name="idNew" value="<?php echo $id ?>" style="display:none;">
                                    
                                    <input type='file' name='imageNew' value="<?php echo $image ?>"><br>
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
                                            <input type="text" name="titleNew" value="<?php echo $title ?>" placeholder="Cambiar el título">
                                            <h2><?php echo $subtitle ?></h2>
                                            <input type="text" name="subtitleNew" value="<?php echo $subtitle ?>" placeholder="cambiar Subtitulo"> 
                                        </div> 
                                        
                                    </div>
                                    <div id="div_article_info">
        
                                        <textarea rows="5" cols="15" name="textNew" value="<?php echo $text ?>" placeholder="<?php echo $text ?>"></textarea>
                                        <h4><?php echo $tags ?></h4>
                                        <input type="text" name="tagsNew" value="<?php echo $tags ?>" placeholder="Agregar tags">
                                        <h3><?php echo $author ?></h3>
                                        <input type="text" name="authorNew" value="<?php echo $author ?>" placeholder="Modificar Author">
                                    </div>

                                    <input type="submit" value="Guardar" class="buttons" onclick="modify()">
                                <form>
    

                            </li>
                        </ul>
                    
                    <?php
                    }
                    
                    ?>
    </div>
</div>