<?php
wp_register_style( 'custom-style', get_template_directory_uri() . '../style.css' );
register_block_style(
    'core/quote',
    array(
        'name'         => 'blue-quote',
        'label'        => esc_html__( 'Blue Quote', 'project-theme' ),
        'inline_style' => '.wp-block-quote.is-style-blue-quote { color: blue; }',
    ),
    'core/paragraph',
    array(
        'name'         => 'center-paragraph',
        'label'        => esc_html__( 'Center Paragraph', 'project-theme' ),
        'style-handle' => 'custom-style',
    ),

);
?>