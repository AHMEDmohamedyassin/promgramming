<?php
    echo '<hr class="comment-separator">';
    if(comments_open()){
        echo '<div class="comments-number">'; comments_number('zero comments' , 'one comments'); echo '</div>';
        $list_comments_array=array(
            'max_depth' => 2,
            'reverse_top_level' => true ,
            'per_page' => 5 ,
            'avatar_size' => 50 ,
            'style' => 'ul'
        );
        wp_list_comments($list_comments_array);
        echo "<div class='form-title'>post comment</div>";
        $comment_form = array(
            'fields' => array(
                'author' => '<di><lable>name</lable><input type="text" class="form-control"></di>' , 
                'email'  => '<di><lable>email</lable><input type="text" class="form-control"></di>' , 
                'url'    => '<di><lable>url</lable><input type="text" class="form-control"></di>' 
            ),
            'comment_field' => '<textarea class="text-area"></textarea>' ,
            'class-submit' => 'form-submit',
            'comment_notes_after' => '' ,
            'comment_notes_before' => '' ,
            'title_reply' => ''
        );
        comment_form($comment_form);
    }
    else{
        $list_comments_array=array(
            'max_depth' => 2,
            'reverse_top_level' => true ,
            'per_page' => 5 ,
            'avatar_size' => 50 ,
            'style' => 'ul'
        );
        wp_list_comments($list_comments_array);
    }