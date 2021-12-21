<?php

/**
 * Fancybox 2.0
 *
 * @package   Fancybox
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @author    Rafael Amorim <amorim@rafaelamorim.com.br>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @copyright 2021 Rafael Amorim
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
/*
 * EXPERIMENTAL: TRY AT YOUR OWN RISK. 
 * 
 * This parameter enable/disable fancybox into albums photos on the wall. 
 * At this time, I couldn't make grouping images from the same album into 
 * fancybox imagebox navigator. 
 * 
 * But I'll keep to other person improve this code. Maybe is just a single piece in somewhere :-)
 * 
 */
define('__FANCYBOX_FANCY_IN_ALBUM_PHOTOS__', true);

function fancybox_init() {
    ossn_extend_view('ossn/js/head', 'js/fancybox.init');
    
    ossn_extend_view('ossn/site/head', 'fancybox');
}

function fancybox() {
    
    $fancybox = ossn_html_css(array(
        'href' => "https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    ));
    $fancybox .= ossn_html_js(array(
        'src' => "https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"
    ));

    return $fancybox;
}

ossn_register_callback('ossn', 'init', 'fancybox_init');
