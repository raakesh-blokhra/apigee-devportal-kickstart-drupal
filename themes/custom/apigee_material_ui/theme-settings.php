<?php

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Theme\ThemeSettings;
use Drupal\system\Form\ThemeSettingsForm;
use Drupal\Core\Form;

function apigee_material_ui_form_system_theme_settings_alter(&$form, Drupal\Core\Form\FormStateInterface $form_state) {

  // Vertical tabs
  $form['material'] = array(
    '#type' => 'vertical_tabs',
    '#prefix' => '<h2><small>' . t('Material UI Settings') . '</small></h2>',
    '#weight' => -10,
  );
    // Navbar
    $form['navbar'] = array(
      '#type' => 'details',
      '#title' => t('Navbar'),
      '#group' => 'material',
    );
    $form['navbar']['fixed'] = array(
      '#type' => 'details',
      '#title' => t('Fixed Navbar'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
    );
    $form['navbar']['fixed']['material_ui_navbar_fixed'] = array(
      '#type' => 'checkbox',
      '#title' => t('Use Fixed navbar'),
      '#default_value' => theme_get_setting('material_ui_navbar_fixed'),
      '#description' => t('Select this checkbox to make the navbar always show on top')
    );
    //Layout
  $form['layout'] = array(
    '#type' => 'details',
    '#title' => t('Layout '),
    '#group' => 'material',
  );
  $form['layout']['container'] = array(
    '#type' => 'details',
    '#title' => t('Container'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['layout']['container']['material_ui_container'] = array(
    '#type' => 'checkbox',
    '#title' => t('Contain content instead of full width'),
    '#default_value' => theme_get_setting('material_ui_container'),
    '#description' => t('Set the content area to be contained by checking this box')
  );

  // Setting colors
  $form['colors'] = array(
    '#type' => 'details',
    '#title' => t('Colors '),
    '#group' => 'material',
  );
  $form['colors']['color_options'] = array(
    '#type' => 'details',
    '#title' => t('Color Options'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['colors']['color_options']['material_ui_colors'] = [
    '#type' => 'select',
    '#title' => t('Choose primary colors'),
    '#default_value' => theme_get_setting('material_ui_colors'),
    '#description' => t('Choose options here to set primary colors for your portal'),
    '#empty_option' => t('Default'),
    '#options' => [
      'deep-orange' => t('Apigee Colors'),
      'blue accent-2' => t('Blue'),
      'green' => t('Green'),
      'grey darken-4' => t('Dark'),
      'white' => t('White'),
      'transparent' => t('Transparent')
    ]
  ];



}

?>
