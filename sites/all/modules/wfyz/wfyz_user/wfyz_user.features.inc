<?php
/**
 * @file
 * wfyz_user.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function wfyz_user_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}
