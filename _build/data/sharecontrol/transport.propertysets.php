<?php
/**
 * propertySets transport file for sharecontrol extra
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
/* @var xPDOObject[] $propertySets */


$propertySets = array();

$propertySets[1] = $modx->newObject('modPropertySet');
$propertySets[1]->fromArray(array (
  'id' => 1,
  'name' => 'ShareControlPropertySet',
  'description' => 'Description for ShareControlPropertySet',
  'properties' => NULL,
), '', true, true);
return $propertySets;
