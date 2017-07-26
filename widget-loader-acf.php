<?php

$key = 'widget_quick-links';
$widgetplacement = self::$config['tab_placement'];

$widget_config = array (
  'key' => $key,
  'name' => 'quick-links',
  'label' => 'Quick Links',
  'display' => 'row',
  'sub_fields' => array (
    array (
      'key' => $key . '_basic_details_tab',
      'label' => 'Basic Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
     array (
      'key' => $key . '_quick-links',
      'label' => 'Quick Links',
      'name' => 'quick_links',
      'type' => 'flexible_content',
      'button_label' => 'Add Link',
      'layouts' => array (
        array (
          'key' => $key . '_link',
          'name' => 'link',
          'label' => 'Link',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => $key . '_link_label',
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
              'key' => $key . '_link_id',
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
      'key' => $key . '_advanced_details_tab',
      'label' => 'Advanced Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    )
  )
);

$widget_config["content-types"] = get_option("options_" . $key . "_available_post_types");
$widget_config["content-sizes"] = array('main', 'main-full-bleed'); // main, main-full-bleed, sidebar
