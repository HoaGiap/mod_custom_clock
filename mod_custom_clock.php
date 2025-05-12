<?php
defined('_JEXEC') or die;
$timezone = $params->get('timezone', 'UTC');
require JModuleHelper::getLayoutPath('mod_custom_clock', $params->get('layout', 'default'));