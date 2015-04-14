<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

require_once(dirname(__FILE__).'/helper.php');
$item = modKaPrayerTimesHelper::getPrayerTimes($params);

$showfirdayprayer = $params->get('showfirdayprayer');
if ($showfirdayprayer) $firdayprayer = modKaPrayerTimesHelper::getFridayPrayer($params);

$hyperlink = $params->get('hyperlink');
if ($hyperlink) $link = modKaPrayerTimesHelper::getHyperLinks($params);

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

$layout = JFilterInput::clean($params->get('layout', 'list'), 'word');
$path = JModuleHelper::getLayoutPath('mod_kaprayertimes', $layout);
if (file_exists($path)) require($path);
