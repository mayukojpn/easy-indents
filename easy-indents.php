<?php
/*
 * Plugin Name:       Easy Indents
 * Plugin URI:        https://github.com/mayukojpn/easy-indents
 * Description:       The easiest way to control indents on your site-wide blog articles.
 * Version:           1.0
 * Requires at least: 1.2
 * Requires PHP:      4.1
 * Author:            Mayo Moriyama
 * Author URI:        https://twitter.com/mayukojpn
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Plugin URI:        https://github.com/mayukojpn/easy-indents
 * Text Domain:       easy-indents
 */

function easy_indents_enqueue ( $content ) {
    return '<style>p {text-indent: 1em;}</style>' . $content;
}
add_filter( 'the_content', 'easy_indents_enqueue' );
