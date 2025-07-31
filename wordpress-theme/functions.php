<?php
/**
 * Autobolt Landing Page Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup
 */
function autobolt_setup() {
    // Add theme support for post thumbnails
    add_theme_support('post-thumbnails');
    
    // Add theme support for HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Add theme support for title tag
    add_theme_support('title-tag');
    
    // Add theme support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'autobolt'),
        'footer'  => esc_html__('Footer Menu', 'autobolt'),
    ));
}
add_action('after_setup_theme', 'autobolt_setup');

/**
 * Enqueue scripts and styles
 */
function autobolt_scripts() {
    // Enqueue theme stylesheet
    wp_enqueue_style('autobolt-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue Google Fonts
    wp_enqueue_style('autobolt-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap', array(), null);
    
    // Enqueue theme JavaScript
    wp_enqueue_script('autobolt-script', get_template_directory_uri() . '/js/theme.js', array('jquery'), '1.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('autobolt-script', 'autobolt_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('autobolt_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'autobolt_scripts');

/**
 * Register widget areas
 */
function autobolt_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'autobolt'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'autobolt'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer Area', 'autobolt'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here to appear in footer.', 'autobolt'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'autobolt_widgets_init');

/**
 * Custom post types and meta fields
 */
function autobolt_custom_post_types() {
    // Register testimonials post type
    register_post_type('testimonials', array(
        'labels' => array(
            'name'               => 'Depoimentos',
            'singular_name'      => 'Depoimento',
            'menu_name'          => 'Depoimentos',
            'add_new'            => 'Adicionar Novo',
            'add_new_item'       => 'Adicionar Novo Depoimento',
            'edit_item'          => 'Editar Depoimento',
            'new_item'           => 'Novo Depoimento',
            'view_item'          => 'Ver Depoimento',
            'search_items'       => 'Buscar Depoimentos',
            'not_found'          => 'Nenhum depoimento encontrado',
            'not_found_in_trash' => 'Nenhum depoimento encontrado na lixeira',
        ),
        'public'      => true,
        'has_archive' => false,
        'supports'    => array('title', 'editor', 'thumbnail'),
        'menu_icon'   => 'dashicons-format-quote',
    ));
    
    // Register FAQ post type
    register_post_type('faq', array(
        'labels' => array(
            'name'               => 'Perguntas Frequentes',
            'singular_name'      => 'Pergunta Frequente',
            'menu_name'          => 'FAQ',
            'add_new'            => 'Adicionar Nova',
            'add_new_item'       => 'Adicionar Nova Pergunta',
            'edit_item'          => 'Editar Pergunta',
            'new_item'           => 'Nova Pergunta',
            'view_item'          => 'Ver Pergunta',
            'search_items'       => 'Buscar Perguntas',
            'not_found'          => 'Nenhuma pergunta encontrada',
            'not_found_in_trash' => 'Nenhuma pergunta encontrada na lixeira',
        ),
        'public'      => true,
        'has_archive' => false,
        'supports'    => array('title', 'editor'),
        'menu_icon'   => 'dashicons-editor-help',
    ));
}
add_action('init', 'autobolt_custom_post_types');

/**
 * Add meta boxes for custom fields
 */
function autobolt_add_meta_boxes() {
    add_meta_box(
        'testimonial_details',
        'Detalhes do Depoimento',
        'autobolt_testimonial_meta_box',
        'testimonials',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'autobolt_add_meta_boxes');

/**
 * Testimonial meta box callback
 */
function autobolt_testimonial_meta_box($post) {
    wp_nonce_field('autobolt_save_testimonial_meta', 'autobolt_testimonial_meta_nonce');
    
    $company = get_post_meta($post->ID, '_testimonial_company', true);
    $badge = get_post_meta($post->ID, '_testimonial_badge', true);
    $rating = get_post_meta($post->ID, '_testimonial_rating', true);
    
    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th scope="row"><label for="testimonial_company">Empresa:</label></th>';
    echo '<td><input type="text" id="testimonial_company" name="testimonial_company" value="' . esc_attr($company) . '" class="regular-text" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th scope="row"><label for="testimonial_badge">Badge:</label></th>';
    echo '<td><input type="text" id="testimonial_badge" name="testimonial_badge" value="' . esc_attr($badge) . '" class="regular-text" placeholder="Ex: +40% conversão" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th scope="row"><label for="testimonial_rating">Avaliação:</label></th>';
    echo '<td><select id="testimonial_rating" name="testimonial_rating">';
    for ($i = 1; $i <= 5; $i++) {
        echo '<option value="' . $i . '"' . selected($rating, $i, false) . '>' . $i . ' estrela' . ($i > 1 ? 's' : '') . '</option>';
    }
    echo '</select></td>';
    echo '</tr>';
    echo '</table>';
}

/**
 * Save testimonial meta data
 */
function autobolt_save_testimonial_meta($post_id) {
    if (!isset($_POST['autobolt_testimonial_meta_nonce']) || !wp_verify_nonce($_POST['autobolt_testimonial_meta_nonce'], 'autobolt_save_testimonial_meta')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['testimonial_company'])) {
        update_post_meta($post_id, '_testimonial_company', sanitize_text_field($_POST['testimonial_company']));
    }
    
    if (isset($_POST['testimonial_badge'])) {
        update_post_meta($post_id, '_testimonial_badge', sanitize_text_field($_POST['testimonial_badge']));
    }
    
    if (isset($_POST['testimonial_rating'])) {
        update_post_meta($post_id, '_testimonial_rating', intval($_POST['testimonial_rating']));
    }
}
add_action('save_post', 'autobolt_save_testimonial_meta');

/**
 * Theme customizer
 */
function autobolt_customize_register($wp_customize) {
    // Add section for contact information
    $wp_customize->add_section('autobolt_contact', array(
        'title'    => 'Informações de Contato',
        'priority' => 120,
    ));
    
    // WhatsApp number
    $wp_customize->add_setting('autobolt_whatsapp', array(
        'default'           => '+5511999999999',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('autobolt_whatsapp', array(
        'label'    => 'Número do WhatsApp',
        'section'  => 'autobolt_contact',
        'type'     => 'text',
    ));
    
    // Email address
    $wp_customize->add_setting('autobolt_email', array(
        'default'           => 'contato@autobolt.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('autobolt_email', array(
        'label'    => 'Email de Contato',
        'section'  => 'autobolt_contact',
        'type'     => 'email',
    ));
    
    // Pricing section
    $wp_customize->add_section('autobolt_pricing', array(
        'title'    => 'Preços',
        'priority' => 130,
    ));
    
    // Setup fee
    $wp_customize->add_setting('autobolt_setup_fee', array(
        'default'           => 497,
        'sanitize_callback' => 'absint',
    ));
    
    $wp_customize->add_control('autobolt_setup_fee', array(
        'label'    => 'Taxa de Setup (R$)',
        'section'  => 'autobolt_pricing',
        'type'     => 'number',
    ));
    
    // Monthly fee
    $wp_customize->add_setting('autobolt_monthly_fee', array(
        'default'           => 197,
        'sanitize_callback' => 'absint',
    ));
    
    $wp_customize->add_control('autobolt_monthly_fee', array(
        'label'    => 'Mensalidade (R$)',
        'section'  => 'autobolt_pricing',
        'type'     => 'number',
    ));
}
add_action('customize_register', 'autobolt_customize_register');

/**
 * Get testimonials
 */
function autobolt_get_testimonials() {
    $testimonials = get_posts(array(
        'post_type'   => 'testimonials',
        'numberposts' => -1,
        'post_status' => 'publish',
    ));
    
    $result = array();
    foreach ($testimonials as $testimonial) {
        $result[] = array(
            'quote'   => get_the_content(null, false, $testimonial),
            'name'    => get_the_title($testimonial),
            'company' => get_post_meta($testimonial->ID, '_testimonial_company', true),
            'badge'   => get_post_meta($testimonial->ID, '_testimonial_badge', true),
            'rating'  => get_post_meta($testimonial->ID, '_testimonial_rating', true),
            'image'   => get_the_post_thumbnail_url($testimonial, 'medium'),
        );
    }
    
    return $result;
}

/**
 * Get FAQ items
 */
function autobolt_get_faq() {
    $faq_items = get_posts(array(
        'post_type'   => 'faq',
        'numberposts' => -1,
        'post_status' => 'publish',
        'orderby'     => 'menu_order',
        'order'       => 'ASC',
    ));
    
    $result = array();
    foreach ($faq_items as $faq) {
        $result[] = array(
            'question' => get_the_title($faq),
            'answer'   => get_the_content(null, false, $faq),
        );
    }
    
    return $result;
}

/**
 * AJAX handler for lead capture
 */
function autobolt_capture_lead() {
    check_ajax_referer('autobolt_nonce', 'nonce');
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Save lead to database or send email
    $lead_data = array(
        'name'    => $name,
        'email'   => $email,
        'phone'   => $phone,
        'message' => $message,
        'date'    => current_time('mysql'),
        'ip'      => $_SERVER['REMOTE_ADDR'],
    );
    
    // You can save to database or send email here
    // For now, we'll just return success
    
    wp_send_json_success(array(
        'message' => 'Lead capturado com sucesso!',
    ));
}
add_action('wp_ajax_autobolt_capture_lead', 'autobolt_capture_lead');
add_action('wp_ajax_nopriv_autobolt_capture_lead', 'autobolt_capture_lead');

/**
 * Add admin menu for leads
 */
function autobolt_admin_menu() {
    add_menu_page(
        'Autobolt Leads',
        'Leads',
        'manage_options',
        'autobolt-leads',
        'autobolt_leads_page',
        'dashicons-groups',
        30
    );
}
add_action('admin_menu', 'autobolt_admin_menu');

/**
 * Leads admin page
 */
function autobolt_leads_page() {
    echo '<div class="wrap">';
    echo '<h1>Leads Capturados</h1>';
    echo '<p>Aqui você pode visualizar e gerenciar os leads capturados pelo site.</p>';
    echo '</div>';
}

/**
 * Security enhancements
 */
function autobolt_security_headers() {
    if (!is_admin()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
        header('Referrer-Policy: strict-origin-when-cross-origin');
    }
}
add_action('init', 'autobolt_security_headers');

/**
 * Optimize images
 */
function autobolt_image_sizes() {
    add_image_size('testimonial-thumb', 100, 100, true);
    add_image_size('hero-image', 600, 400, true);
}
add_action('after_setup_theme', 'autobolt_image_sizes');

/**
 * Remove unnecessary WordPress features for landing page
 */
function autobolt_cleanup() {
    // Remove comment support
    remove_post_type_support('post', 'comments');
    remove_post_type_support('page', 'comments');
    
    // Remove unnecessary menu items for non-admin users
    if (!current_user_can('administrator')) {
        remove_menu_page('edit-comments.php');
        remove_menu_page('tools.php');
    }
}
add_action('init', 'autobolt_cleanup');

/**
 * Custom excerpt length
 */
function autobolt_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'autobolt_excerpt_length');

/**
 * Performance optimizations
 */
function autobolt_performance() {
    // Disable WordPress emojis
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    
    // Remove WordPress version from head
    remove_action('wp_head', 'wp_generator');
    
    // Remove RSD link
    remove_action('wp_head', 'rsd_link');
    
    // Remove Windows Live Writer link
    remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'autobolt_performance');
?>