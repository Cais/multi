<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<?php
/**
 * Multi
 *
 * A Child-Theme of Desk Mess Mirrored 2.0 - Marble desktop covered with a mix
 * of old and new items, such as some vintage papers, a stainless steel pen,
 * and, a hot cup of coffee!
 *
 * Desk Mess Mirrored Theme Description: Marble desktop covered with a mix of
 * old and new items, such as some vintage papers, a stainless steel pen, and, a
 * hot cup of coffee! Now with more documentation and post-format support for
 * the following types: asides, quotes and status!
 *
 * @package     Desk_Mess_Mirrored
 * @subpackage  Multi
 * @since       1.8.3
 *
 * @link        http://wordpress.org/extend/themes/desk-mess-mirrored
 * @link        http://buynowshop.com/themes/desk-mess-mirrored/multi
 * @link        https://github.com/Cais/desk-mess-mirrored/multi
 * @link        http://wordpress.org/extend/themes/multi/ - old version
 *
 * @internal    Child-Theme version should always match the Parent-Theme version
 * @internal    REQUIRES WordPress version 3.1.0 per Desk Mess Mirrored 2.0
 *
 * @author      Edward Caissie <edward.caissie@gmail.com>
 * @copyright   Copyright (c) 2009-2012, Edward Caissie
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.
 *
 * You may NOT assume that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to:
 *
 *      Free Software Foundation, Inc.
 *      51 Franklin St, Fifth Floor
 *      Boston, MA  02110-1301  USA
 *
 * The license for this software can also likely be found here:
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Last revised December 11, 2011
 * @version     2.0-RC1
 * Modified `title` HTML tag content to use `dmm_wp_title`
 * Removed the 'author' and 'comment' templates as they are functionally identical to the Desk Mess Mirrored templates
 *
 * @internal    Project To-do List (see readme.txt for pre-2.0)
 * @todo Review idea of adding `wp_die` call if Child-Theme and Parent-Theme version do not match? Is there a viable alternative to stop processing?
 * @todo Review idea of adding option to modify RSS feed in header cup (source: Rick Hackett rhhackett@telus.net)
 */
?>
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
    <title><?php dmm_wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="mainwrap">
        <div id="header-container">
            <div id="header"> <!-- header -->
                <div id="headerleft"></div>
                <div id="logo">
                    <h2><a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a></h2>
                    <p><?php bloginfo( 'description' ); ?></p>
                </div> <!-- #logo -->
                <div id="cup">
                    <a href="<?php echo get_feed_link( 'rss2' ); ?>" title="<?php _e( 'Add this blog to any reader', 'desk-mess-mirrored' ); ?>"><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/rsscup.png" border="0" /></a>
                </div><!-- #cup -->
                <div id="top-navigation-menu">
                    <?php dmm_nav_menu(); ?>
                </div>
            </div> <!-- #header -->
        </div> <!-- #header-container -->