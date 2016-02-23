<?php
/**
 * systemSettings transport file for sharecontrol extra
 *
 * Copyright 2016 by Danny Harding <http://stuntrocket.co>
 * Created on 02-23-2016
 *
 * @package sharecontrol
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $systemSettings */


$systemSettings = array();

$systemSettings[1] = $modx->newObject('modSystemSetting');
$systemSettings[1]->fromArray(array (
  'key' => 'sharecontrol.core_path',
  'value' => '/home/www/assets/mycomponents/sharecontrol/core/components/sharecontrol/',
  'xtype' => 'textfield',
  'namespace' => 'sharecontrol',
  'area' => 'sharecontrol',
  'name' => 'sharecontrol.core_path',
  'description' => 'Description for sharecontrol.core_path',
), '', true, true);
$systemSettings[2] = $modx->newObject('modSystemSetting');
$systemSettings[2]->fromArray(array (
  'key' => 'sharecontrol.assets_url',
  'value' => '/home/www/assets/mycomponents/sharecontrol/assets/components/sharecontrol/',
  'xtype' => 'textfield',
  'namespace' => 'sharecontrol',
  'area' => 'sharecontrol',
  'name' => 'sharecontrol.assets_url',
  'description' => 'Description for sharecontrol.assets_url',
), '', true, true);
$systemSettings[3] = $modx->newObject('modSystemSetting');
$systemSettings[3]->fromArray(array (
  'key' => 'sharecontrol.assets_fronturl',
  'value' => '/assets/mycomponents/sharecontrol/assets/components/sharecontrol/',
  'xtype' => 'textfield',
  'namespace' => 'sharecontrol',
  'area' => 'sharecontrol',
  'name' => 'sharecontrol.assets_fronturl',
  'description' => 'Description for sharecontrol.assets_fronturl',
), '', true, true);
return $systemSettings;
