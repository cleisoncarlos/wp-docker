<?php
// Código de funções do tema
function meu_tema_scripts() {
    wp_enqueue_style('meu-tema-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');
?>
