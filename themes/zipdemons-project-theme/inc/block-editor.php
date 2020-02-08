<?php
register_block_style(
    'core/quote',
    array(
        'name'         => 'blue-quote',
        'label'        => esc_html__( 'Blue Quote', 'project-theme' ),
        'inline_style' => '.wp-block-quote.is-style-blue-quote { color: blue; }',
    ),
    'core/quote',
    array(
        'name'         => 'green-quote',
        'label'        => esc_html__( 'Green Quote', 'project-theme' ),
        'inline_style' => '.wp-block-quote.is-style-green-quote { color: #5CDB95; }',
    ),
    'core/paragraph',
    array(
        'name'         => 'center-paragraph',
        'label'        => esc_html__( 'Center Paragraph', 'project-theme' ),
        'inline_style' => '.wp-block-paragraph.is-style-center-paragraph { text-align: center; }',
    ),
    'core/heading',
    array(
        'name'         => 'center-heading',
        'label'        => esc_html__( 'Center Heading', 'project-theme' ),
        'inline_style' => '.wp-block-heading.is-style-center-heading { text-align: center; }',
    ),
    'core/gallery',
    array(
        'name'         => 'center-gallery',
        'label'        => esc_html__( 'Center Gallery', 'project-theme' ),
        'inline_style' => '.wp-block-gallery { margin-left: 200px }',
    )

);
?>