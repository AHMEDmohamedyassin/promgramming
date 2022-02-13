<?php
    include_once('wp-bootstrap-navwalker.php');

//featured image
    add_theme_support('post-thumbnails');
// adding function to website
// get_template_directory_uri() تعطيني مسار ملف الورد بريس

    function ahmed_add_style (){
        
        wp_enqueue_style('bootstrap.min' , get_template_directory_uri() . '/style/bootstrap.min.css'); //تسمية الملف ليس له علاقة باسم الملف \ مسار الملف
        wp_enqueue_style('fontawesome.min' , get_template_directory_uri() . '/style/fontawesome.min.css'); //تسمية الملف ليس له علاقة باسم الملف \ مسار الملف
        wp_enqueue_style('all.min' , get_template_directory_uri() . '/style/all.min.css'); //تسمية الملف ليس له علاقة باسم الملف \ مسار الملف
        wp_enqueue_style('style' , get_template_directory_uri() . '/style/style.css'); //تسمية الملف ليس له علاقة باسم الملف \ مسار الملف

    }

    function ahmed_add_script (){
        
        wp_deregister_script('jquery'); //remove register for old jquery
        wp_register_script('jquery' , includes_url('/js/jquery/jquery.js') , false ,'', true); //register new jquery
        wp_enqueue_script('jquery'); //enqueue new jquery
        wp_enqueue_script('js' , get_template_directory_uri() . '/js/main.js' , array() , false , true); // true علشان يحط الملف في اخر الصفحة
        wp_enqueue_script('bootstrap.min' , get_template_directory_uri() . '/js/bootstrap.min.js' , array('jquery') , false , true); // true علشان يحط الملف في اخر الصفحة
        
        wp_enqueue_script('html5shiv' , get_template_directory_uri() . '/js/html5shiv.js' ); // مكانه في الheader
            wp_script_add_data('html5shiv' , 'conditional' , 'lt IE 9'); // شرط الإضافة
        wp_enqueue_script('respond' , get_template_directory_uri() . '/js/respond.js' ); // مكانه في الheader
            wp_script_add_data('respond' , 'conditional' , 'lt IE 9'); // شرط الإضافة
        
    }

    function add_menu (){    //adding custum menus

        register_nav_menus(array(
            'footer_menu' => 'the footer menu :> ' , 
            'bootstrap-menu' =>   'the navigation bar menu' ,
        ));
    }
    
    function get_ahmedmenu() {
        wp_nav_menu(array(
            'theme_location' => 'bootstrap-menu' ,
            'menu_class' => 'nav navbar-nav navbar-right', //class on list of menu
            'container' => false,
            'depth' => 2,
            'walker' => new wp_bootstrap_navwalker()
        ));
    };

    function  ahmed_sidebar() {
        register_sidebar(array(
            'name'          => 'main_sidebar' ,
            'id'            => 'main-sidebar'
        ));
    }

    function excerptLength(){
        if(is_author()){
        return 15;                  // صفحة الكاتب مختلفة عن الباقي
        }
        else
        {
            return 50; 
        }
    }
    function excerptMore (){
        return '....';
    }

    function pagination (){ // التقليب بين الصفحات بالأرقام
        global $wp_query;
        $all_pages = $wp_query -> max_num_pages;
        $current_page = max(1 , get_query_var('paged'));
        if($all_pages > 1){
            return paginate_links(array( // ممكن كل عناصر المصفوفة تتشال و تشتغل عادي
                'current' => $current_page , 
                'base' => get_pagenum_link() . '%_%', //علشان يمكن من التقليب بين الصفحات
                'formate' => 'page/%#%', // for url
                'mid' => 2 , // الأرقام حول رقم الصفحة الحالي
                'next_text'  => '<i class="fas fa-arrow-right"></i>' ,
                'prev_text'  => '<i class="fas fa-arrow-left"></i>' 
            ));
        }
    }

    add_filter('excerpt_length' , 'excerptLength');
    add_filter('excerpt_more' , 'excerptMore');

// add actions
// add_action()

    add_action('wp_enqueue_scripts' , 'ahmed_add_style'  ); //تم تفعيل الدالة
    add_action('wp_enqueue_scripts' , 'ahmed_add_script' );
    add_action('init' , 'add_menu'); // تفعيل القائمة
    add_action('widgets_init' ,'ahmed_sidebar');