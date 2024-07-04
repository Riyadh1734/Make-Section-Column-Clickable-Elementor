<?php
/**
 * Plugin Name: Make Section & Column Clickable Elementor
 * Description: A plugin that allow users to click in the whole column or section instead of individual elements
 * Plugin URI: https://wordpress.org/plugins/make-section-column-clickable-elementor
 * Author: Riyadh Ahmed
 * Author URI: http://sajuahmed.epizy.com/
 * Version: 2.0
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Elementor tested up to: 3.20.2
 *  @package Riyadh_Ahmed
 */

require __DIR__ . '/vendor/autoload.php';

//don't call the file directly
if (!defined('ABSPATH')) exit;

use Elementor\Controls_Manager;
use Elementor\Element_Base;

defined('ABSPATH') || die();


/**
 * Initialize the plugin tracker
 *
 * @return void
 */
function appsero_init_tracker_make_section_column_clickable_elementor() {

  $client = new Appsero\Client( '23afbf6c-5532-454b-bd5e-1aa2968615ac', 'Make Section &amp; Column Clickable Elementor', __FILE__ );

  // Active insights
  $client->insights()->init();

}

appsero_init_tracker_make_section_column_clickable_elementor();

/**
 * Main plugin class
 *
 * @return void
 */
class Make_Section_Clickable_Setup {
  /**
   * Initialize function for action
   * 
   * @since 1.0
   */
  public static function init() {
    add_action('elementor/element/column/section_advanced/after_section_end', [__CLASS__, 'add_controls_section'], 1);
    add_action('elementor/element/section/section_advanced/after_section_end', [__CLASS__, 'add_controls_section'], 1);
    add_action('elementor/element/common/_section_style/after_section_end', [__CLASS__, 'add_controls_section'], 1);
    add_action('elementor/frontend/before_render', [__CLASS__, 'before_section_render'], 1);
  }
  /**
   * Add control section function
   * 
   * @return void
   * 
   * @since 1.0
   */
  public static function add_controls_section(Element_Base $element) {
    $tabs = Controls_Manager::TAB_CONTENT;

    if ('section' === $element->get_name() || 'column' === $element->get_name()) {
      $tabs = Controls_Manager::TAB_LAYOUT;
    }

    $element->start_controls_section(
      '_section_ra_Make_Section_Clickable_Setup',
      [
        'label' => __('Wrapper Link', 'make-section-clickable-elementor'),
        'tab'   => $tabs,
      ]
    );

    $element->add_control(
      'ra_element_link',
      [
        'label'       => __('Link', 'make-section-clickable-elementor'),
        'type'        => Controls_Manager::URL,
        'placeholder' => 'https://example.com',
      ]
    );

    $element->end_controls_section();
  }

  /**Before section render function
   *
   * @since 1.0
   */
  public static function before_section_render(Element_Base $element) {

    $link_settings = $element->get_settings_for_display('ra_element_link');
    //$blank = $link_settings['is_external'] != '' ? '_blank' : '_self';
    $blank = isset($link_settings['is_external']) && $link_settings['is_external'] != '' ? '_blank' : '_self';

    if ($link_settings && !empty($link_settings['url'])) {
      $element->add_render_attribute(
        '_wrapper',
        [
          'data-ra-element-link' => json_encode($link_settings),
          'style' => 'cursor: pointer',
          'target' => $blank,
          'onClick' => 'window.open(\'' . $link_settings['url'] . '\', \'' . $blank . '\')',
        ]
      );
    }
  }
}
/**
 * Kick-off the plugin
 */
Make_Section_Clickable_Setup::init();
