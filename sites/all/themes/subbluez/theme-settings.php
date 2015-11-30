<?php

/**
 * @file
 * Theme settings file for the Cozumel theme.
 */

require_once dirname(__FILE__) . '/template.php';

/**
 * Implements hook_form_FORM_alter().
 */
function subbluez_form_system_theme_settings_alter(&$form, $form_state) {
    $form['bluez_settings']['slideshow'] = array(
        '#type' => 'fieldset',
        '#title' => t('Front Page Slideshow'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );

    $form['bluez_settings']['slideshow']['slideshow_display'] = array(
        '#type' => 'checkbox',
        '#title' => t('Show slideshow'),
        '#default_value' => theme_get_setting('slideshow_display', 'subbluez'),
        '#description'   => t("Check this option to show Slideshow in front page. Uncheck to hide."),
    );
    $form['bluez_settings']['footer']['footer_developed'] = array(
        '#type' => 'checkbox',
        '#title' => t('Show theme developed by in footer'),
        '#default_value' => theme_get_setting('footer_developed', 'subbluez'),
        '#description'   => t("Check this option to show design & developed by text in footer. Uncheck to hide."),
    );
    $form['bluez_settings']['footer']['footer_copyright'] = array(
        '#type' => 'checkbox',
        '#title' => t('Show copyright text in footer'),
        '#default_value' => theme_get_setting('footer_copyright', 'subbluez'),
        '#description'   => t("Check this option to show copyright text in footer. Uncheck to hide."),
    );

    //Columns
    $form['bluez_settings']['Columns'] = array(
        '#type' => 'fieldset',
        '#title' => t('Columns'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );
    $form['bluez_settings']['Columns']['columns_markup'] = array(
        '#markup' => t('Default Promoted Area Images are placed at <b>bluez/images/promoted</b>, User will able to change these images path or image name from column\'s description settings.</br><code>Example : &lt;img src="sites/all/themes/bluez/images/promoted/col1.jpg"&gt;</code></br><b>Image Dimensions :</b></br>For 1 Column = Max Width will be 960px</br>For 2 Column = Max Width will be 467px</br>For 3 Column = Max Width will be 306px</br></br>To keep image on top of the conent use below pattern,<code>&lt;div class="image_wrapper"&gt;&lt;img src="sites/all/themes/bluez/images/promoted/col1.jpg"&gt;&lt;/div&gt;"</code>If IMG is not inside the DIV mentioned above, image and content will be inline.'),
    );
    $form['bluez_settings']['Columns']['colonetitle'] = array(
        '#type' => 'textfield',
        '#title' => t('First Column Title'),
        '#default_value' => theme_get_setting('colonetitle', 'subbluez'),
        '#description'   => t("Enter Title for First Column."),
    );
    $form['bluez_settings']['Columns']['colone'] = array(
        '#type' => 'textarea',
        '#title' => t('First Column Description'),
        '#default_value' => theme_get_setting('colone', 'subbluez'),
        '#description'   => t("Enter Description for First Column."),
    );
    $form['bluez_settings']['Columns']['coltwotitle'] = array(
        '#type' => 'textfield',
        '#title' => t('Second Column Title'),
        '#default_value' => theme_get_setting('coltwotitle', 'subbluez'),
        '#description'   => t("Enter Title for Second Column."),
    );
    $form['bluez_settings']['Columns']['coltwo'] = array(
        '#type' => 'textarea',
        '#title' => t('Second Column Description'),
        '#default_value' => theme_get_setting('coltwo', 'subbluez'),
        '#description'   => t("Enter Description for Second Column."),
    );
    $form['bluez_settings']['Columns']['colthreetitle'] = array(
        '#type' => 'textfield',
        '#title' => t('Third Column Title'),
        '#default_value' => theme_get_setting('colthreetitle', 'subbluez'),
        '#description'   => t("Enter Title for Third Column."),
    );
    $form['bluez_settings']['Columns']['colthree'] = array(
        '#type' => 'textarea',
        '#title' => t('Third Column Description'),
        '#default_value' => theme_get_setting('colthree', 'subbluez'),
        '#description'   => t("Enter Description for Third Column."),
    );

    //Welcome
    $form['bluez_settings']['Welcome'] = array(
        '#type' => 'fieldset',
        '#title' => t('Welcome Text'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );
    $form['bluez_settings']['Welcome']['welcome_title'] = array(
        '#type' => 'textfield',
        '#title' => t('Add Title'),
        '#default_value' => theme_get_setting('welcome_title', 'subbluez'),
        '#description'   => t("Enter Title for Welcome text at frontpage."),
    );
    $form['bluez_settings']['Welcome']['welcome_text'] = array(
        '#type' => 'textarea',
        '#title' => t('Add Description'),
        '#default_value' => theme_get_setting('welcome_text', 'subbluez'),
        '#description'   => t("Enter Description for Welcome text at frontpage."),
    );

    //Social
    $form['bluez_settings']['social']['display'] = array(
        '#type' => 'checkbox',
        '#title' => t('Show Social Icon'),
        '#default_value' => theme_get_setting('display', 'subbluez'),
        '#description'   => t("Check this option to show Social Icon. Uncheck to hide."),
    );
}
