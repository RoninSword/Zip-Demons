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
        'label'        => esc_html__( 'green Quote', 'project-theme' ),
        'inline_style' => '.wp-block-quote.is-style-purple-quote { color: #5CDB95; }',
    ),
    'core/paragraph',
    array(
        'name'         => 'center-paragraph',
        'label'        => esc_html__( 'Center Paragraph', 'project-theme' ),
        'inline_style' => '.wp-block-paragraph.is-style-center-paragraph { text-align: center; }',
    )
);
?>