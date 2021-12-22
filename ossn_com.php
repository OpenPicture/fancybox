<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
/*
 * EXPERIMENTAL: TRY AT YOUR OWN RISK. 
 * 
 * This parameter enable/disable fancybox into albums photos on the wall. 
 * At this time, I couldn't make grouping images from the same album into 
 * fancybox imagebox navigator. 
 * 
 * But I'll keep to other person improve this code. Maybe is just a single piece in somewhere :-)
 * Taking the work from Rafael, $arsalan  after changing the below value to false you must flush cache of OSSN.
 * 
 */
define('__FANCYBOX_FANCY_IN_ALBUM_PHOTOS__', true);

function fancybox_init() {
    ossn_extend_view('js/ossn.site', 'js/fancybox.init');
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