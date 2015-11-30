<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Basis theme.
 */
 
 function basis_preprocess_html(&$variables) {
 	drupal_add_js(drupal_get_path('theme', 'basis') .'/js/basis.js');
  drupal_add_js(drupal_get_path('theme', 'basis') .'/js/responsive-tables.js');
  drupal_add_css(drupal_get_path('theme', 'basis') .'/css/responsive-tables.css');
 }
 
 
 // breadcrumbs
 
 function basis_breadcrumb($variables) {

    if (count($variables['breadcrumb']) > 0) {
      $lastitem = sizeof($variables['breadcrumb']);
      $title = drupal_get_title();
      $crumbs = '<ul class="breadcrumb">';
      $a=1;
      foreach($variables['breadcrumb'] as $value) {
          if ($a!=$lastitem){
           $crumbs .= '<li class="breadcrumb-'.$a.'">'. $value . ' ' . '</li>' . '<li class="breadcrumb-sep">'. '&frasl;' . ' ' . '</li>';
           $a++;
          }
 				  
 				  else {
              $crumbs .= '<li class="breadcrumb-last">' . $value . '</li>';          }
      }
      $crumbs .= '</ul>';
    return $crumbs;
    }
   
 }
 
 
