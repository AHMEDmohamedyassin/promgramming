<!-- نفس محتوي صفحة index.php نسخ لصق -->
<!-- لكن الأفضل تغيير شكل عرض المقالات يكون الشكل أحسن -->
<?php get_header(); ?> 
<div class='container this'>

    <div class='cat_info text-center'>
        <div class='category_title text-center'><?php single_cat_title() ?></div>
        <div class='category_disc'><?php echo category_description() ?></div>
        <div class='cat-comment'>
            <?php
                $comm_arg=array('state' => 'approve');
                $post_count = 0;
                $all_comments = get_comments($comm_arg); //كمل هنااااااااااااااااااااا
                for($i = 0 ; $i < $all_comments ; $i ++){
                    $post_id = $i -> comment_post_ID; // get post id of comment
                    if(in_category(single_cat_title() , $post_id)){
                        echo $post_count = $post_count ++;
                    }
                }
            ?>
        </div>
    </div>

        <div class='row'>
            <div class='col-md-10'>
                <?php 
                    $category_query_array = array(
                        'posts_per_page' => 4
                    );
                    $category_query = new wp_Query($category_query_array);
                    if($category_query -> have_posts()){
                    while($category_query -> have_posts()){ 
                        $category_query -> the_post(); ?> 
                    <div class='category-post'>
                        <h3 class='post-title'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <span class='post-author'><i class="fas fa-id-card"></i><?php the_author(); ?></span>
                        <span class='post-date'><i class="far fa-clock"></i><?php the_date(); ?></span>
                        <span class='post-comment'><i class="fas fa-comments"></i><?php comments_number('no comments' , 'one comment'); ?></span>
                        <?php the_post_thumbnail('',['class' => 'img-responsive img-thumbnail' , 'title' => 'post image']); ?>
                        <div class='post-text'><?php the_excerpt() ?></div>
                    </div>
                <?php    }
                }?>
            </div>
            <?php 
                if(is_active_sidebar('main-sidebar')){
                    echo "<div class='col-md-2'>";
                        dynamic_sidebar('main-sidebar');
                        get_sidebar();
                    echo "</div>";
                }
            ?>
        </div>
        
        <div class='numbered-pagination'>
        <?php echo pagination(); ?>
        </div>

    
</div>
<?php get_footer(); ?>
