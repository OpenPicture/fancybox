<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */

function fancybox_init() {
    ossn_extend_view('ossn/js/head', 'js/fancybox.init');
    ossn_extend_view('css/ossn.default', 'css/fancybox.init');
    
    ossn_extend_view('ossn/site/head', 'fancybox');
}
function fancybox() {
    $fancybox = ossn_html_css(array(
        'href' => "https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
    ));
    $fancybox .= ossn_html_js(array(
        'src' => "https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"
    ));
    return $fancybox;
}
ossn_register_callback('ossn', 'init', 'fancybox_init');
