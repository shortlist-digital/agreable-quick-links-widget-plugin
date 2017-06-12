<?php

$widgetplacement = self::$config['tab_placement'];

$widget_config = array (
  'key' => 'widget_quick-links',
  'name' => 'quick-links',
  'label' => 'Quick Links',
  'display' => 'row',
  'sub_fields' => array (
    array (
      'key' => 'quick_links_basic_details_tab',
      'label' => 'Basic Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
     array (
      'key' => 'widget_quick-links_quick-links',
      'label' => 'Quick Links',
      'name' => 'quick_links',
      'type' => 'flexible_content',
      'button_label' => 'Add Link',
      'layouts' => array (
        array (
          'key' => 'widget_quick-links_link',
          'name' => 'link',
          'label' => 'Link',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'widget_quick-links_link_label',
              'label' => 'Label',
              'name' => 'label',
              'type' => 'text',
              'instructions' => 'The name for the link, e.g. Tuscany',
              'required' => 1,
              'wrapper' => array (
                'width' => 50,
              ),
            ),
            array (
              'key' => 'widget_quick-links_link_id',
              'label' => 'ID',
              'name' => 'id',
              'type' => 'text',
              'instructions' => 'This is the identifier e.g. tuscany, this must match the ID used in your Content Group',
              'required' => 1,
              'wrapper' => array (
                'width' => 50,
              ),
            ),
          ),
        ),
      ),
    ),
    array (
      'key' => 'quick_links_advanced_details_tab',
      'label' => 'Advanced Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
    array (
      'key' => 'quick_links_colour',
      'label' => 'Colour',
      'name' => 'colour',
      'type' => 'color_picker',
    ),
  ),
);

$widget_config["content-types"] = array('sponsored_longform', 'sponsored_hub'); // section, post
$widget_config["content-sizes"] = array('main', 'main-full-bleed'); // main, main-full-bleed, sidebar
