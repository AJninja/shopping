<?php
/**
Plugin Name: ArrowPress Importer
Description: ArrowPress One click demo import 
Plugin URI: https://www.arrowhitech.com/
Version: 1.2.0
Author: AHT
Author URI: https://www.arrowhitech.com/
License: MIT License
Text Domain: apr-importer
*/

// don't load directly
if (!defined('ABSPATH'))
    die('-1');


define('ARROWPRESS_IMPORTER_URL', plugin_dir_url(__FILE__));
// require_once( 'inc/functions.php' );
require_once( 'one-click-demo-import/one-click-demo-import.php' );


/** Enqueue admin style file for import page */
add_action('admin_enqueue_scripts', 'arrowpress_importer_enqueue'); 
function arrowpress_importer_enqueue() {
  	wp_enqueue_style('arrowpress_importer_style', plugin_dir_url(__FILE__) . 'assets/css/style.css');
}

/**
 * Import file setup
 */
if ( ! function_exists( 'arrowpress_importer_files' ) ) {
	function arrowpress_importer_files() {
		$demo_link = 'https://hn.arrowpress.net/lusion/';
	  	return array(
			array(
				'import_file_name'             => 'Base Content',
				'categories'                   => array( 'Base Content'),
				'local_import_file'            => plugin_dir_path( __FILE__ ) .'data/content.xml',
				'local_import_widget_file'     => plugin_dir_path( __FILE__ ) .'data/widget.wie',
				'local_import_customizer_file' => plugin_dir_path( __FILE__ ) .'data/customizer.dat',
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/base.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
			),
			array(
				'import_file_name'             => 'Home Fashion Store',
				'categories'                 => array( 'Home Fashion'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-fashion-store.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-fashion-store',
			), 
			array(
				'import_file_name'             => 'Home Fashion Brand',
				'categories'                 => array( 'Home Fashion'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-fashion-brand.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-fashion-brand',
			),
			array(
				'import_file_name'             => 'Home Lookbook',
				'categories'                 => array( 'Home Fashion'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-lookbook.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-lookbook',
			), 
			array(
				'import_file_name'             => 'Home Minimalist',
				'categories'                 => array( 'Home Fashion'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-minimalist.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-minimalist',
			), 
			array(
				'import_file_name'             => 'Home Slide',
				'categories'                 => array( 'Home Fashion'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-slide.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-slide',
			), 
			array(
				'import_file_name'             => 'Home Christmas',
				'categories'                 => array( 'Home Fashion'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-christmas.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-christmas',
			), 
			array(
				'import_file_name'             => 'Home Shoe Shop',
				'categories'                 => array( 'Home Fashion'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-shose.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-shose-shop',
			), 	
			array(
				'import_file_name'             => 'Home Bag Shop',
				'categories'                 => array( 'Home Fashion'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-bag.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-bag-shop',
			), 
			
			array(
				'import_file_name'             => 'Home Full Option',
				'categories'                 => array( 'Home Fashion'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-full-option.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-full-option',
			), 
			array(
				'import_file_name'             => 'Home Fashion Men Women',
				'categories'                 => array( 'Home Fashion'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-fashion-for-men-and-women.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-fashion-men-women',
			), 
			array(
				'import_file_name'             => 'Home Fashion Women',
				'categories'                 => array( 'Home Fashion'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-fashion-women.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-fashion-women',
			), 
			array(
				'import_file_name'             => 'Home Fashion Children',
				'categories'                 => array( 'Home Fashion'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-children-fashion.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-fashion-children',
			), 
			array(
				'import_file_name'             => 'Home Fashion Men',
				'categories'                 => array( 'Home Fashion'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-men-fashion.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-fashion-men',
			), 
			array(
				'import_file_name'             => 'Home Fashion Newborn',
				'categories'                 => array( 'Home Fashion'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-fashion-newborn.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-fashion-newborn',
			), 
			array(
				'import_file_name'             => 'Home Accessories',
				'categories'                 => array( 'Home Fashion'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-accessories.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-accesories',
			), 
			array(
				'import_file_name'             => 'Home Instargam',
				'categories'                 => array( 'Home Fashion'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-instargam.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-instargam',
			),
			array(
				'import_file_name'             => 'Home Food',
				'categories'                 => array( 'Home Food & Drink'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-food.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-food',
			),  
			array(
				'import_file_name'             => 'Home Cake Shop',
				'categories'                 => array( 'Home Food & Drink'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-sweets-bakery.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-cake-shop',
			), 	
			array(
				'import_file_name'             => 'Home Organic',
				'categories'                 => array( 'Home Food & Drink'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-organic.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-organic',
			), 
			array(
				'import_file_name'             => 'Home Liquor Store',
				'categories'                 => array( 'Home Food & Drink'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-drinks.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-liquor-store',
			),
			array(
				'import_file_name'             => 'Home Decor',
				'categories'                 => array( 'Home Store'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-decor.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-decor',
			), 
			array(
				'import_file_name'             => 'Home Furniture',
				'categories'                 => array( 'Home Store'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-furniture.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-furniture',
			),
			array(
				'import_file_name'             => 'Home Handmade',
				'categories'                 => array( 'Home Store'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-handmade.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-handmade',
			), 
			array(
				'import_file_name'             => 'Home Watch',
				'categories'                 => array( 'Home Store'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-watch.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-watch',
			),
			array(
				'import_file_name'             => 'Smart Watch',
				'categories'                 => array( 'Home Store'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/smart-watch.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'smart-watch',
			),
			array(
				'import_file_name'             => 'Home Valentine',
				'categories'                 => array( 'Home Store'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/home-valentine.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'home-valentine',
			),
			array(
				'import_file_name'             => 'Martin Luther King Jr',
				'categories'                 => array( 'Landing'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/martin-luther-king-jr.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'martin-luther-king-jr',
			),
			array(
				'import_file_name'             => 'Super Bowl Sunday',
				'categories'                 => array( 'Landing'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/super_bowl_sunday.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'super-bowl-sunday-2',
			),
			array(
				'import_file_name'             => 'Super Bowl Sunday 2',
				'categories'                 => array( 'Landing'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/super_bowl_sunday_2.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'super-bowl-sunday',
			),
			array(
				'import_file_name'             => 'Valentine',
				'categories'                 => array( 'Landing'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/landing-valentine.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'valentine',
			),
			array(
				'import_file_name'             => 'Valentine 2',
				'categories'                 => array( 'Landing'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/landing-comestic.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'valentines-day-2',
			),
			array(
				'import_file_name'             => 'Presidents',
				'categories'                 => array( 'Landing'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/presidents-day.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'presidents-day',
			),
			array(
				'import_file_name'             => 'Easter Fashion',
				'categories'                 => array( 'Landing'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/easter-fashion.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'presidents-day',
			),
			array(
				'import_file_name'             => 'Flower Mothers Day',
				'categories'                 => array( 'Landing'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/flower-mothers-day.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'presidents-day',
			),
			array(
				'import_file_name'             => 'Jewelry Mothers Day',
				'categories'                 => array( 'Landing'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/jewelry-mothers-day.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'jewelry-mothers-day',
			),
			array(
				'import_file_name'             => 'Memorial Day',
				'categories'                 => array( 'Landing'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/memorial-day.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'memorial-day',
			),
			array(
				'import_file_name'             => 'Basket Easter',
				'categories'                 => array( 'Landing'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/basket-easter.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'basket-easter',
			),
			array(
				'import_file_name'             => 'Fathers Day',
				'categories'                 => array( 'Landing'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/fathers-day.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'fathers-day',
			),
			array(
				'import_file_name'             => 'Fathers Day 2',
				'categories'                 => array( 'Landing'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/fathers-day-2.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'fathers-day-2',
			),
			array(
				'import_file_name'             => 'Independence Day',
				'categories'                 => array( 'Landing'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/independence-day.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'independence-day',
			),
			array(
				'import_file_name'             => 'Independence Day 2',
				'categories'                 => array( 'Landing'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/independence-day-2.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'independence-day-2',
			),
			array(
				'import_file_name'             => 'Back to schhool',
				'categories'                 => array( 'Landing'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/back-to-school.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'back-to-school',
			),
			array(
				'import_file_name'             => 'Back to schhool 2',
				'categories'                 => array( 'Landing'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/back-to-school-2.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'back-to-school-2',
			),
			array(
				'import_file_name'             => 'Labor day',
				'categories'                 => array( 'Landing'),
				'import_preview_image_url'     => trailingslashit( ARROWPRESS_IMPORTER_URL ) .'assets/images/labor-day.jpg',
				'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'apr-importer' ),
				'preview_url'                => $demo_link.'labor-day',
			)
		);
	}
	add_filter( 'pt-ocdi/import_files', 'arrowpress_importer_files' );
}


/**
 * Steps after importing content: 
 * 
 * - Set menu location
 * - Import theme options
 * - Set front page & blog page
 * - Import slider
 */
if ( ! function_exists( 'arrowpress_importer_after_import' ) ) {
	function arrowpress_importer_after_import( $selected_import ) {
    	global $wp_filesystem; 
		if ( empty( $wp_filesystem ) ) {
			require_once ABSPATH . '/wp-admin/includes/file.php';
			WP_Filesystem();
		}	
		$chosen_template = $selected_import['import_file_name'];

		if ( 'Base Content' === $selected_import['import_file_name'] ) {

			//Set Main Menu
			$main_menu = get_term_by( 'name', 'Menu Primary', 'nav_menu' );
			set_theme_mod( 'nav_menu_locations', array(
					'primary' => $main_menu->term_id,
				)
			); 

			
			echo 'Delete Default Post and Page \n';

			/** Delete Hello Post */
			wp_delete_post( 1, true );

			/** Delete "Sample Page" Page */
			wp_delete_post( 2, true );	
			
		}elseif('Home Fashion Store' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Fashion Store' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
			/*if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-fashion-store.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
				}
			}*/
		}elseif('Home Fashion Brand' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Fashion Brand' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
			/*if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-brand.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
				}
			}*/
		}elseif('Home Food' === $selected_import['import_file_name']){
			//front page
			echo "Set Front Page \n";	
			$front_page = get_page_by_title( 'Home Food' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}	
			/*if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-food.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
				}
			} */
			
		}elseif('Home Decor' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Decor' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
			/*if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-decor.zip';
				$main_slider_popup = plugin_dir_path( __FILE__ ) . '/data/popup-decor.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = $slider_popup = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
					$slider_popup->importSliderFromPost( true, true, $main_slider_popup );
				}
			} */
			
		}elseif('Home Cake Shop' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Cake Shop' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
			/*if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-cake-shop.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
				}
			} */
		}elseif('Home Shoe Shop' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Shoe Shop' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
			/*if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-shoe.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
				}
			} */
		}elseif('Home Bag Shop' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Bag Shop' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
			/*if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-bag.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
				}
			} */
		}elseif('Home Furniture' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Furniture' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
			/*if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-furniture.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
				}
			} */
		}elseif('Home Full Option' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Full Option' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			} 
		}elseif('Home Fashion Men Women' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Fashion Men Women' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
			/*if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-fashion-women-men.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
				}
			} */
		}
		elseif('Home Fashion Women' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Fashion Women' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
			/*if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-fashion-women.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
				}
			} */
		}
		elseif('Home Fashion Children' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Fashion Children' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
			/*if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-fashion-children.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
				}
			} */
		}
		elseif('Home Fashion Men' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Fashion Men' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
			if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-fashion-men.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
				}
			} 
		}
		elseif('Home Fashion Newborn' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Fashion Newborn' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
			if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-fashion-newborn.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
				}
			} 
		}
		elseif('Home Accessories' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Accessories' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
			/*if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-accessories.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
				}
			} */
		}
		elseif('Home Lookbook' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Lookbook' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			} 
		}
		elseif('Home Minimalist' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Minimalist' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
			/*if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-minimalist.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
				}
			} */
		}
		elseif('Home Instargam' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Instargam' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			} 
		}
		elseif('Home Handmade' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Handmade' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
			/*if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-handmade.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
				}
			} */
		}
		elseif('Home Slide' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Slide' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}
		elseif('Home Christmas' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Christmas' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
			/*if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-christmas.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
				}
			} */
		}
		elseif('Home Organic' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Organic' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
			/*if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-organic.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
				}
			} */
		}
		elseif('Home Liquor Store' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Liquor Store' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			} 
		}
		elseif('Home Watch' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Home Watch' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
			/*if ( class_exists( 'RevSlider' ) ) {
				$main_slider = plugin_dir_path( __FILE__ ) . '/data/home-watch.zip';

				if ( file_exists( $main_slider ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $main_slider );
				}
			} */
		}
		elseif('Smart Watch' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Smart Watch' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}
		elseif('Martin Luther King Jr' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Martin Luther King Jr' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}
		elseif('Super Bowl Sunday' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Super Bowl Sunday' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}
		elseif('Super Bowl Sunday 2' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Super Bowl Sunday 2' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}
		elseif('Valentine' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Valentine' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}
		elseif('Valentine 2' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Valentine 2' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}elseif('Presidents' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Presidents' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}elseif('Flower Mothers Day' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Flower Mothers Day' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}elseif('Basket Easter' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Easter Fashion' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}elseif('Jewelry Mothers Day' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Jewelry Mothers Day' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}elseif('Easter Easter' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Easter Easter' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}elseif('Memorial Day' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Memorial Day' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}
		elseif('Fathers Day' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Fathers Day' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}
		elseif('Independence Day' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Independence Day' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}
		elseif('Independence Day 2' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Independence Day 2' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}
		elseif('Back to schhool 2' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Back to schhool 2' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}
		elseif('Back to schhool 2' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Back to schhool 2' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}
		elseif('Labor day' === $selected_import['import_file_name']) {
			//front page
			$front_page = get_page_by_title( 'Labor day' );
			if ( isset( $front_page->ID ) ) {
				update_option( 'page_on_front', $front_page->ID );
				update_option( 'show_on_front', 'page' );
			}

			$blog_page = get_page_by_title( 'Blog' );
			if ( isset( $blog_page->ID ) ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}  
		}
		$ch = curl_init();
		$string = $selected_import['import_file_name'];
		$home = str_replace(' ', '_', $string);
		$baseUrl = get_site_url();
		$domain = str_replace('http://','',$baseUrl);
		$domain = str_replace('https://','',$domain);
		
		$domain = trim(preg_replace('/^.*?\\/\\/(.*)?\\//', '$1', $domain));

		if(strpos($domain, "/")){
			$domain = substr($domain, 0, strpos($domain, "/"));
		}
		curl_setopt($ch, CURLOPT_URL, "https://www.magesolution.com/licensekey/index/importhome/item/27657550/domain/$domain/home/$home");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'IMPORT-THEMEFOREST-THEME');

		$result = curl_exec($ch);
		curl_close($ch);
    }
	add_action( 'pt-ocdi/after_import', 'arrowpress_importer_after_import' );
}


/** Echo text before importing widget in log file */
if ( ! function_exists( 'arrowpress_importer_before_widgets_import' ) ) {
	function arrowpress_importer_before_widgets_import( $selected_import ) {
		echo "Import Widget";
	}
	add_action( 'pt-ocdi/before_widgets_import', 'arrowpress_importer_before_widgets_import' );
}

/**
 * Changing Import Page slug
 */
if ( ! function_exists( 'arrowpress_importer_plugin_page_setup' ) ) {
	function arrowpress_importer_plugin_page_setup( $default_settings ) {
		$default_settings['parent_slug'] = 'themes.php';
		$default_settings['page_title']  = esc_html__( 'ArrowPress Importer' , 'apr-importer' );
		$default_settings['menu_title']  = esc_html__( 'Import Demo Content' , 'apr-importer' );
		$default_settings['capability']  = 'import';
		$default_settings['menu_slug']   = 'arrowpress-importer';

		return $default_settings;
	}
	add_filter( 'pt-ocdi/plugin_page_setup', 'arrowpress_importer_plugin_page_setup' );
}

add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

// Increase PHP max execution time. Just in case, even though the AJAX calls are only 25 sec long.
$disabled = explode(',', ini_get('disable_functions'));
if( !ini_get('safe_mode') && !in_array('set_time_limit', $disabled) ) {
	set_time_limit( apply_filters( 'pt-ocdi/set_time_limit_for_demo_data_import', 600 ) );
}