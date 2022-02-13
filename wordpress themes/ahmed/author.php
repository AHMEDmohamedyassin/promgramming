<?php get_header(); ?> <!-- header -->
<!-- 
< ?php bloginfo('url'); // أجيب معلومات عن الموقع?>
< ?php get_search_form(); ?>
< ?php get_sidebar(); ?>
-->
<div class='container this'>

            <div class="the_author" style='background-color:#d8d8d8'>
                <div class='row'>
                    <div class='col-md-3'>
                        <?php 
                            $avatar_class = array(
                                'class' => 'author_avatar'
                            );
                            echo get_avatar(get_the_author_meta('id') , 124 ,'' ,'' , $avatar_class ); 
                        ?>
                    </div>
                    <div class='col-md-6'>
                        <h4><?php the_author_meta('first_name') ?>
                            <?php the_author_meta('last_name') ?>
                        </h4>
                        <h3><?php the_author_meta('nickname') ?></a></h3>
                        <p><?php
                                if(get_the_author_meta('description')){
                                    the_author_meta('description');
                                }
                            ?>
                        </p>
                    </div>
                </div>
                <hr>
                <div class='author_posts_count'> <?php echo 'number of user posts : ' . count_user_posts(get_the_author_meta('id')); ?> </div>
                <div>the author comments number : 
                    <?php  
                        $get_comment = array(
                            'user_id' => get_the_author_meta('id') , 
                            'count'   => true
                        );
                        echo get_comments($get_comment);
                    ?>
                </div>
            </div>

                <!-- end author file -->

    <div class='row'>

        <?php
        
            $wp_query_array = array(
                'author'  => get_the_author_meta('id') ,
                'posts_per_page' => -1  // معناه كل الموستات ممكن أكتب أي رقم تاني
            );
            $custom_posts = new wp_Query($wp_query_array);

            if($custom_posts -> have_posts()){
            while($custom_posts -> have_posts()){ 
                $custom_posts -> the_post(); 
        ?> 

        <div class='col-sm-6'>
            <div class='main-post'>
                <h3 class='post-title'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <span class='post-date'><i class="far fa-clock"></i><?php the_date(); ?></span>
                <span class='post-comment'><i class="fas fa-comments"></i><?php comments_number('no comments' , 'one comment'); ?></span>
                <?php the_post_thumbnail('',['class' => 'img-responsive img-thumbnail' , 'title' => 'post image']); ?>
                <!-- <p class='post-text'>< ?php the_content('READ MORE ....') ?></p> -->
                <div class='post-text'><?php the_excerpt() ?></div>
                <!-- <a href='< ?php echo get_permalink(); ?>'>read more...</a> -->
                <hr>
                <p class='categories'><i class="fa fa-tags fa-fw fa-lg"></i> <?php the_category(' , '); ?></p>
                <?php if(has_tag()){ ?>
                <p class='tags'><i class="fa fa-tag fa-fw fa-lg"></i> <?php the_tags(); ?></p>
                <?php } ?>
            </div>
        </div>

        <?php    }
        }
        wp_reset_postdata(); // reset loop علشان ميحصلش مشاكل بعد الإستعلام
        ?>
    </div>
    <div class= 'title'> author comments </div>
    <div class= 'author_comments'>
    <?php
        $author_comments = array(
            'author'      => get_the_author_meta('ID') ,
            'number'      => 5,
            'status'      => 'approve' ,
            'post_status' => 'publish' ,
            'post_type'   => 'post' 
        );
        $comments = get_comments($author_comments);
        if($comments){
            foreach($comments as $comment)
            {
                echo '<a href="' . get_permalink($comment->comment_post_ID) .'">' . get_the_title($comment->comment_post_ID) . '</a> <br>';
                echo '<div class="author_comments_content">'.$comment->comment_content .'</div>';
                echo '<div class="author_comments_date">'.mysql2date('Y , l ,F j' ,$comment->comment_date) .'</div>';
                echo '<hr>';
            }
        }else{
            echo 'author has no comments';
        }
    ?>
    </div>
</div>
<?php get_footer(); ?>
