enqueue javascript

function theme_js() {

wp_enqueue_script( 'bootstrap',
get_template_directory_uri() . '/js/bootstrap.min.js',
array() );

wp_enqueue_script( 'index.js',
get_template_directory_uri() . '/js/index.js',
array() );

}

add_action( 'wp_footer', 'theme_js' );
