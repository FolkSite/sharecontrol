<?php
/**
 * templateVars transport file for sharecontrol extra
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
/* @var xPDOObject[] $templateVars */


$templateVars = array();

$templateVars[1] = $modx->newObject('modTemplateVar');
$templateVars[1]->fromArray(array (
  'id' => 1,
  'property_preprocess' => false,
  'type' => 'listbox',
  'name' => 'DisplayShareControls',
  'caption' => 'Display Share Controls',
  'description' => 'Description for Display Share Controls',
  'elements' => 'Yes==1||No==0',
  'rank' => 0,
  'display' => 'default',
  'default_text' => '1',
  'properties' => 
  array (
  ),
  'input_properties' => 
  array (
    'allowBlank' => 'true',
    'listWidth' => '',
    'title' => '',
    'typeAhead' => 'false',
    'typeAheadDelay' => '250',
    'forceSelection' => 'false',
    'listEmptyText' => '',
  ),
  'output_properties' => 
  array (
  ),
), '', true, true);
return $templateVars;
