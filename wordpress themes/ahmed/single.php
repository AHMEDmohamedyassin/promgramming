<?php get_header(); ?> <!-- header -->

<div class='container this'>
<?php if(have_posts()){
            while(have_posts()){ 
                the_post(); ?>

            <div class='main-post single-post'>
                <?php edit_post_link('<div class="edit">Edit <i class="fa fa-pencil"></i></div>'); ?>
                <h3 class='post-title'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <span class='post-author'><i class="fas fa-id-card"></i><?php the_author(); ?></span>
                <span class='post-date'><i class="far fa-clock"></i><?php the_date(); ?></span>
                <span class='post-comment'><i class="fas fa-comments"></i><?php comments_number('no comments' , 'one comment'); ?></span>
                <?php the_post_thumbnail('',['class' => 'img-responsive img-thumbnail single-img' , 'title' => 'post image']); ?>
                <!-- <p class='post-text'>< ?php the_content('READ MORE ....') ?></p> -->
                <div class='post-text single-text'><?php the_content() ?></div>
                <!-- <a href='< ?php echo get_permalink(); ?>'>read more...</a> -->
                <hr>
                <p class='categories'><i class="fa fa-tags fa-fw fa-lg"></i> <?php the_category(' , '); ?></p>
                <?php if(has_tag()){ ?>
                <p class='tags'><i class="fa fa-tag fa-fw fa-lg"></i> <?php the_tags(); ?></p>
                <?php } ?>
            </div>

            <?php  }
        }?>

            <!-- start pagination -->
            <div class='post_pagination'> 
                <?php if(get_previous_post_link()){previous_post_link('%link' , '<span class="prev_page"><i class="fa fa-chevron-left"></i> %title </span>');} else{echo '<span class="disable">no previous posts</span>';} ?> 
                <?php if(get_next_post_link()){ echo "<span class='prev_page'>"; next_post_link('%link' , '<span class="next_page"> %title <i class="fa fa-chevron-right"></i></span>'); echo "</span>";} else{echo '<span class="disable">no next posts</span>';} ?> 
            </div>
            <hr>
            <!-- end pagination -->

            <!-- start the author file -->
            <div class="the_author" style='background-color:#d8d8d8'>
                <div class='row'>
                    <div class='col-md-2'>
                        <?php 
                            $avatar_class = array(
                                'class' => 'author_avatar'
                            );
                            echo get_avatar(get_the_author_meta('id') , 96 ,'' ,'' , $avatar_class ); 
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
                <div>the author link : <?php the_author_posts_link() ?></div>
            </div>
            <!-- end the author file -->

            <!--start near posts -->
            <div class='near_posts'>
                <?php
                    $near_posts_array = array(
                        'category_in' => get_the_category() ,
                        'posts_per_page' => 5 , 
                        'post__not_in' => array (get_queried_object_id()) ,
                        'orderby' => 'rand'
                    );
                    $near_posts = new wp_Query($near_posts_array);
                    if($near_posts -> have_posts()){
                        while($near_posts -> have_posts()){
                        $near_posts -> the_post();
                    ?>
                <h3 class='post-title'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <span class='post-author'><i class="fas fa-id-card"></i><?php the_author(); ?></span>
                <span class='post-date'><i class="far fa-clock"></i><?php the_date(); ?></span>
                <span class='post-comment'><i class="fas fa-comments"></i><?php comments_number('no comments' , 'one comment'); ?></span>
                <div class='post-text'><?php the_excerpt() ?></div>
                <?php
                    }}
                    wp_reset_postdata();
                ?>
                <!--end near posts -->

                </div>

            <?php comments_template(); // من أجل إظهار تصميم الورد بريس للتعليقات أحذف صفحة comments.php ?>
</div>
<?php get_footer(); ?>
