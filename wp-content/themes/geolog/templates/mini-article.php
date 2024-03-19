<?php
$article = get_query_var('article'); 
//var_dump($article);
if($article) { ?>
    <div class="message">
        <h3 class="message-title_long"><?php echo $article->post_title; ?></h3>
        <?php 
            echo $article->post_content;
        ?>
    </div>
<?php } ?>