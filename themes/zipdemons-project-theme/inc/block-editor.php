<?php
register_block_style(
    'core/quote',
    array(
        'name'         => 'blue-quote',
        'label'        => esc_html__( 'Blue Quote', 'project-theme' ),
        'inline_style' => '.wp-block-quote.is-style-blue-quote { color: blue; }',
    ),
    'core/paragraph'
    array(
        'name'         => 'center-paragraph',
        'label'        => esc_html__( 'Center Paragraph', 'project-theme' ),
        'inline_style' => '.wp-block-paragraph.is-style-center-paragraph { text-align: center; }',
    )
);