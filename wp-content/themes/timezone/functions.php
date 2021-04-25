<?php
//add theme support
add_action('after_setup_theme', 'add_theme_support_func');
function add_theme_support_func() {
	add_theme_support('widgets');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'script',
        'style',
    ) );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', [
        'height'      => 190,
        'width'       => 190,
        'flex-width'  => false,
        'flex-height' => false,
    ] );
    add_theme_support( 'customize-selective-refresh-widgets' );

	load_theme_textdomain( 'timezone', get_template_directory() . '/languages' );

	register_nav_menu( 'primary', 'Primary Menu' );

	add_image_size( 'staff-size', 361, 489, true );
	add_image_size( 'post-size', 361, 380, true );
	add_image_size( 'blog-size', 750, 375, true );
}
//add scripts and styles
function add_theme_scripts_styles_func() {
//	scripts
	wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array(), false, true);
	wp_enqueue_script('modernizr');
	wp_register_script('jquery-theme', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array(), false, true);
	wp_enqueue_script('jquery-theme');
	wp_register_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery-theme'), false, true);
	wp_enqueue_script('popper');
	wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery-theme'), false, true);
	wp_enqueue_script('bootstrap');
	wp_register_script('jquery-slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery-theme'), false, true);
	wp_enqueue_script('jquery-slicknav');
	wp_register_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery-theme'), false, true);
	wp_enqueue_script('owl-carousel');
	wp_register_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery-theme'), false, true);
	wp_enqueue_script('slick');
	wp_register_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery-theme'), false, true);
	wp_enqueue_script('wow');
	wp_register_script('animated', get_template_directory_uri() . '/assets/js/animated.headline.js', array('jquery-theme'), false, true);
	wp_enqueue_script('animated');
	wp_register_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array('jquery-theme'), false, true);
	wp_enqueue_script('magnific-popup');
	wp_register_script('scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array('jquery-theme'), false, true);
	wp_enqueue_script('scrollUp');
	wp_register_script('nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery-theme'), false, true);
	wp_enqueue_script('nice-select');
	wp_register_script('sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery-theme'), false, true);
	wp_enqueue_script('sticky');
	wp_register_script('contact', get_template_directory_uri() . '/assets/js/contact.js', array('jquery-theme'), false, true);
	wp_enqueue_script('contact');
	wp_register_script('mailsend', get_template_directory_uri() . '/assets/js/mailsend.js', array('jquery-theme'), false, true);
	wp_enqueue_script('mailsend');
	wp_localize_script( 'mailsend', 'data',
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);
	wp_register_script('form', get_template_directory_uri() . '/assets/js/jquery.form.js', array('jquery-theme'), false, true);
	wp_enqueue_script('form');
	wp_register_script('validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array('jquery-theme'), false, true);
	wp_enqueue_script('validate');
	wp_register_script('mail-script', get_template_directory_uri() . '/assets/js/mail-script.js', array('jquery-theme'), false, true);
	wp_enqueue_script('mail-script');
	wp_register_script('ajaxchimp', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js', array('jquery-theme'), false, true);
	wp_enqueue_script('ajaxchimp');
	wp_register_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery-theme'), false, true);
	wp_enqueue_script('plugins');
	wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery-theme'), false, true);
	wp_enqueue_script('main');
//	styles
	wp_register_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-style');
	wp_register_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style('owl-carousel');
	wp_register_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
	wp_enqueue_style('flaticon');
	wp_register_style('slicknav', get_template_directory_uri() . '/assets/css/slicknav.css');
	wp_enqueue_style('slicknav');
	wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css');
	wp_enqueue_style('animate');
	wp_register_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
	wp_enqueue_style('magnific-popup');
	wp_register_style('fontawesome-all', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css');
	wp_enqueue_style('fontawesome-all');
	wp_register_style('themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css');
	wp_enqueue_style('themify-icons');
	wp_register_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style('slick');
	wp_register_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css');
	wp_enqueue_style('nice-select');
	wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('style');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts_styles_func' );

// Add options page
add_action('admin_menu', function() {
	add_menu_page( 'Настройки темы', 'Настройки', 'manage_options', 'theme-options', 'add_my_theme_options_func', 'dashicons-admin-generic', 99 );
});
function add_my_theme_options_func() {
	// Сохранение настроек
	if ($_POST) {
		update_option('timezone_phone', stripslashes($_POST['phone']));
		update_option('timezone_working_time', stripslashes($_POST['working-time']));
		update_option('timezone_city', stripslashes($_POST['city']));
		update_option('timezone_adress', stripslashes($_POST['adress']));
		update_option('timezone_email', stripslashes($_POST['email']));
		update_option('timezone_email_text', stripslashes($_POST['email-text']));
		echo '<div id="message" class="updated fade"><p><strong>Успешно сохраненно</strong></p></div>';
	}

	?>
    <div class="wrap">
        <h2><?php echo get_admin_page_title() ?></h2>

        <form method="post" novalidate="novalidate">
            <div class="row">
                <div>
                    <label><?php _e('Телефон', 'timezone'); ?>
                        <input type="text" name="phone" value="<?php echo get_option('timezone_phone'); ?>">
                    </label>
                </div>
                <div>
                    <label><?php _e('Рабочее время', 'timezone'); ?>
                        <input type="text" name="working-time" value="<?php echo get_option('timezone_working_time'); ?>">
                    </label>
                </div>
                <div>
                    <label><?php _e('Город', 'timezone'); ?>
                        <input type="text" name="city" value="<?php echo get_option('timezone_city'); ?>">
                    </label>
                </div>
                <div>
                    <label><?php _e('Адрес', 'timezone'); ?>
                        <input type="text" name="adress" value="<?php echo get_option('timezone_adress'); ?>">
                    </label>
                </div>
                <div>
                    <label><?php _e('Почта', 'timezone'); ?>
                        <input type="text" name="email" value="<?php echo get_option('timezone_email'); ?>">
                    </label>
                </div>
                <div>
                    <label><?php _e('Текст почты', 'timezone'); ?>
                        <input type="text" name="email-text" value="<?php echo get_option('timezone_email_text'); ?>">
                    </label>
                </div>
            </div>
            <p class="submit">
                <input type="submit" class="button button-primary button-large" value="<?php _e('Сохранить', 'timezone'); ?>" />
            </p>
        </form>
    </div>
    <?php
}

// add custom logo class
add_filter( 'get_custom_logo', 'change_logo_class' );

function change_logo_class( $html ) {
	$html = str_replace( 'custom-logo-link', 'logo', $html );
	return $html;
}

// Add custom post types
add_action( 'init', 'register_post_types_func' );
function register_post_types_func(){
    // Staff
	register_post_type( 'staff', [
		'label'  => null,
		'labels' => [
			'name'               => 'Сотрудники', // основное название для типа записи
			'singular_name'      => 'Сотрудник', // название для одной записи этого типа
			'add_new'            => 'Добавить Сотрудника', // для добавления новой записи
			'add_new_item'       => 'Добавление Сотрудника', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Сотрудника', // для редактирования типа записи
			'new_item'           => 'Новый Сотрудник', // текст новой записи
			'view_item'          => 'Смотреть Сотрудники', // для просмотра записи этого типа.
			'search_items'       => 'Искать Сотрудника', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Сотрудники', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-businessman',
		'capability_type'   => 'post',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'page-attributes', 'custom-fields', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
	// News
	register_post_type( 'news', [
		'label'  => null,
		'labels' => [
			'name'               => 'Новости', // основное название для типа записи
			'singular_name'      => 'Новость', // название для одной записи этого типа
			'add_new'            => 'Добавить Новость', // для добавления новой записи
			'add_new_item'       => 'Добавление Новость', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Новости', // для редактирования типа записи
			'new_item'           => 'Новая Новость', // текст новой записи
			'view_item'          => 'Смотреть Новость', // для просмотра записи этого типа.
			'search_items'       => 'Искать Новость', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Новости', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		"menu_position" => 5,
		"menu_icon" => "dashicons-edit-large",
		"supports" => [ "title", "editor", "thumbnail", "page-attributes" ],
		'capability_type'   => 'post',
		"hierarchical" => false,
		"rewrite" => [ "slug" => "news", "with_front" => true ],
		'taxonomies'          => [],
		'has_archive'         => "news",
		'query_var'           => true,
    ]);
	// News categories
	register_taxonomy('news_category', array('news'), array(
		'hierarchical'  => true,
		'labels'        => array(
			'name'              => 'Категирии новостей',
			'singular_name'     => 'Категирия новостей'
		),
		'show_ui'       => true,
		'query_var'     => true,
		//'rewrite'       => array( 'slug' => 'the_genre' ), // свой слаг в URL
	));
}

// Add sidebars
function register_sidebars_func() {
	// Blog right sidebar
	register_sidebar([
		'name' => 'Правый сайдбар',
		'id'   => 'blog_right_sidebar',
		'description' => 'Правый сайдбар в записях',
		'before_widget' => '<aside class="single_sidebar_widget widget %2$s">',
		'after_widget'  => "</aside>\n",
		'before_title'  => '<h4 class="widget_title">',
	]);
}
add_action('widgets_init', 'register_sidebars_func');

//function edit_list_cat_func($html, $args) {
//    $html = str_replace('<ul>', '<ul class="list cat-list">', $html);
//    return $html;
//}
//add_filter('wp_list_categories', 'edit_list_cat_func', 11, 2);

// Enable shortcodes in text widgets
add_filter( 'widget_text', 'do_shortcode' );

add_shortcode('cat_list', 'cat_list_func');
function cat_list_func() {
	$args = array(
		'title_li'           => null,
        'number' => 6,
        'show_count' => true,
        'orderby' => 'count',
        'order' => 'DESC'
    );

    ?>
	<aside class="single_sidebar_widget post_category_widget">
        <h4 class="widget_title">Category</h4>
        <ul class="list cat-list">
            <?php
            wp_list_categories($args);
            ?>
        </ul>
    </aside>
      <?php
}

add_shortcode('popular_posts', 'popular_posts_func');
function popular_posts_func() {
	$args = array(
		'title_li'           => null,
        'number' => 6,
        'show_count' => true,
        'orderby' => 'count',
        'order' => 'DESC'
    );

}


// Ajax mail
add_action( 'wp_ajax_mailsend', 'ajax_mail_func' );
add_action('wp_ajax_nopriv_mailsend', 'ajax_mail_func');

function ajax_mail_func() {

	$to = get_option('admin_email');
	$from = "wordpress@artjoker-wp";
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$message = "Имя: " . $name . "<br/>";
	$message .= "Email: " . $_POST['email'] . "<br/>";
	$message .= "Тема: " . $_POST['subject'] . "<br/>";
	$message .= "Сообщение: " . $_POST['message'] . "<br/>";
	$headers = array(
		'From: ' . $from,
		'content-type: text/html'
	);

	$status = wp_mail( $to, $subject, $message, $headers );

    echo 'Mail send';
//    echo $status;
	wp_die();
}

## Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter( 'get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});