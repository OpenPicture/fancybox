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
$com = new OssnComponents;
?>
//<script>

    Fancybox.defaults.l10n = {
        CLOSE: '<?php echo ossn_print('fancybox:close'); ?>',
        NEXT: '<?php echo ossn_print('fancybox:nex'); ?>',
        PREV: '<?php echo ossn_print('fancybox:prev'); ?>',
        MODAL: '<?php echo ossn_print('fancybox:modal'); ?>',
        ERROR: '<?php echo ossn_print('fancybox:error'); ?>',
        IMAGE_ERROR: '<?php echo ossn_print('fancybox:image_error'); ?>',
        ELEMENT_NOT_FOUND: '<?php echo ossn_print('fancybox:element_not_found'); ?>',
        AJAX_NOT_FOUND: '<?php echo ossn_print('fancybox:ajax_not_found'); ?>',
        AJAX_FORBIDDEN: '<?php echo ossn_print('fancybox:ajax_forbidden'); ?>',
        IFRAME_ERROR: '<?php echo ossn_print('fancybox:iframe_error'); ?>',
        TOGGLE_ZOOM: '<?php echo ossn_print('fancybox:toggle:zoom'); ?>',
        TOGGLE_THUMBS: '<?php echo ossn_print('fancybox:toggle_thumbs'); ?>',
        TOGGLE_SLIDESHOW: '<?php echo ossn_print('fancybox:toggle_slideshow'); ?>',
        TOGGLE_FULLSCREEN: '<?php echo ossn_print('fancybox:toggle_fullscreen'); ?>',
        DOWNLOAD: '<?php echo ossn_print('fancybox:download'); ?>',
    }

    $(document).ajaxComplete(function () {
        $(".ossn-wall-item .post-contents img").attr('data-fancybox', '');

    <?php if ($com->isActive('OssnPhotos') && __FANCYBOX_FANCY_IN_ALBUM_PHOTOS__) : ?>
            $(".ossn-wall-item .ossn-photos-wall img").attr('data-fancybox', 'gallery');
            var urlImage = '';
            $(".ossn-wall-item .ossn-photos-wall img").each(function () {
                urlImage = $(this).attr('src').replace("size=album", "size=view");
                $(this).attr('data-src', urlImage);
            });
    <?php endif; ?>
    });


    Fancybox.bind("[data-fancybox]", {});

    Fancybox.bind("#gallery a", {
        groupAll: false,
    });

    