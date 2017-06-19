<?php

if (!isset($content_width)) $content_width = 625;

get_template_part('includes/constantes');
get_template_part('includes/util');

get_template_part('includes/theme_setup');
get_template_part('includes/theme_widgets');
get_template_part('includes/theme_enqueue');
get_template_part('includes/widget.contenido');

get_template_part('includes/svg');
get_template_part('includes/google-analytics');

get_template_part('includes/galeria/index');
get_template_part('includes/class.redes-sociales');

get_template_part('includes/woocommerce/gateway.banco');
get_template_part('includes/woocommerce/reordenar-form-checkout');
get_template_part('includes/woocommerce/cupones-condicionales');
get_template_part('includes/woocommerce/renombrar-checkout');
get_template_part('includes/woocommerce/vaciar-carrito');
get_template_part('includes/woocommerce/dni');

add_filter('login_headertitle', 'get_bloginfo');
add_filter('login_headerurl', 'retornarLoginURL');

// Permitir usar shortcodes en widgets.
add_filter('widget_text','do_shortcode');

//////////////
// Limpieza //
//////////////

// Se eliminan emojis
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('wp_print_styles', 'print_emoji_styles' );

// Se elimina Manifest para Windows Live Writer del head
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

// Se elimina el meta generator
remove_action('wp_head', 'wp_generator');
