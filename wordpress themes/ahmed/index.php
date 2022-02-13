<?php get_header(); ?> <!-- header -->
<!-- 
< ?php bloginfo('url'); // أجيب معلومات عن الموقع?>
< ?php get_search_form(); ?>
< ?php get_sidebar(); ?>
-->
<div class='container this'>
    <div class='row'>

        <?php if(have_posts()){
            while(have_posts()){ 
                the_post(); ?> 

        <div class='col-sm-6'>
            <div class='main-post'>
                <h3 class='post-title'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <span class='post-author'><i class="fas fa-id-card"></i><?php the_author(); ?></span>
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
        }?>
        <!-- <div class='post_pagination'> 
        < ?php if(get_previous_posts_link()){ previous_posts_link('<span class="prev_page"><i class="fa fa-chevron-left"></i> prev</span>');} else{echo '<span class="disable">no previous pages</span>';} ?> 
        < ?php if(get_next_posts_link()){ next_posts_link('<span class="next_page"> next <i class="fa fa-chevron-right"></i></span>');} else{echo '<span class="disable">no next pages</span>';} ?> 
        </div>-->
        <div class='numbered-pagination'>
        <?php echo pagination(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
