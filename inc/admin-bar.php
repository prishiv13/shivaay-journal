<?php
/***
 * Adds a node (menu item) to the admin bar menu.
 *
 * @link https://developer.wordpress.org/reference/classes/wp_admin_bar/add_menu/
 * @link https://developer.wordpress.org/reference/hooks/admin_bar_menu/
 * @link https://developer.wordpress.org/reference/functions/admin_url/
 * @link https://developer.wordpress.org/reference/functions/site_url/
 *
 * @package Shivaay Journal
 * @subpackage inc
 */

/**
 * ReallySimpleAdminBars
 */
class ReallySimpleAdminBars
{
  /**
   * ReallySimpleAdminBars: __construct()
   */
  function __construct()
	{
    add_action( 'admin_bar_menu', [ $this,'shivaay_simple_item' ], 500);
		add_action( 'admin_bar_menu', [ $this,'shivaay_simple_update_item' ], 500);
		add_action( 'admin_bar_menu', [ $this,'shivaay_simple_doc_item' ], 500);
		add_action( 'admin_bar_menu', [ $this,'shivaay_simple_support_item' ], 500);
	}

  /**
   * ReallySimpleAdminBars: shivaay_simple_item( $admin_bar )
   */
	function shivaay_simple_item( $admin_bar ){
		$admin_bar->add_menu([
			'id'		  => 'shivaay-journal-admin-bar',
			'parent'	=> null,
			'title'		=> esc_html__( 'Shivaay Journal Theme', 'shivaay-journal' ),
			'href'		=> 'https://wordpress.org/themes/shivaay-journal/',
			'meta'    => [ 'target' => '_blank' ],
		]);
	}

  /**
   * ReallySimpleAdminBars: shivaay_simple_update_item( $admin_bar )
   */
	function shivaay_simple_update_item( $admin_bar ){
		$admin_bar->add_menu([
			'id'		  => 'shivaay-journal-admin-bar-update',
			'parent'	=> 'shivaay-journal-admin-bar',
			'title'		=> esc_html__( 'Updates', 'shivaay-journal' ),
			'href'		=> 'https://github.com/Dev-Flaubert-Wordpress/shivaay-journal-theme/releases',
			'meta'    => [ 'target' => '_blank' ],
		]);
	}

  /**
   * ReallySimpleAdminBars: shivaay_simple_doc_item( $admin_bar )
   */
	function shivaay_simple_doc_item( $admin_bar ){
		$admin_bar->add_menu([
			'id'		  => 'shivaay-journal-admin-bar-documentation',
			'parent'	=> 'shivaay-journal-admin-bar',
			'title'		=> esc_html__( 'Documentation', 'shivaay-journal' ),
			'href'		=> 'https://github.com/Dev-Flaubert-Wordpress/shivaay-journal-theme#shivaay-journal-theme',
			'meta'    => [ 'target' => '_blank' ],
		]);
	}

  /**
   * shivaaySimpleAdminBars: shivaay_simple_support_item( $admin_bar )
   */
	function shivaay_simple_support_item( $admin_bar ){
		$admin_bar->add_menu([
			'id'		  => 'shivaay-journal-admin-bar-support',
			'parent'	=> 'shivaay-journal-admin-bar',
			'title'		=> esc_html__( 'Support / Suggestions', 'shivaay-journal' ),
			'href'		=> 'https://wordpress.org/support/theme/shivaay-journal/',
			'meta'    => [ 'target' => '_blank' ],
		]);
	}
}
