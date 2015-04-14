<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

class modKaPrayerTimesHelper {
	function getPrayerTimes($params) {
        $db = JFactory::getDbo();
        $app = JFactory::getApplication();
//        $today = date( 'D jS F', time() + $app->getCfg('offset') * 60 * 60 );
//        $now = date( 'Ymd', time() + $app->getCfg('offset') * 60 * 60 );
        $now = date( 'Ymd', time() );		// $app->getCfg('offset') returns a string rather than a number
        $table = 'jos_kaprayertimes_prayertimes';
        
        $query = "SELECT * FROM $table WHERE date = $now and mid= ".$params->get('mosque','');
        $db->setQuery($query);
        $row = $db->loadObject();

        return $row;
    }

	function getFridayPrayer($params) {
		$firdayprayer_text = $params->get('firdayprayer_text', 'Friday Prayer Time:');
		$firdayprayer_time = $params->get('firdayprayer_time', '1.00pm');
		return $firdayprayer_link = $firdayprayer_text." ". $firdayprayer_time;
	}	
	function getHyperLinks($params) {
		$hyperlink_text = $params->get('hyperlink_text', 'View full timetable');
		$hyperlink_link = JRoute::_('index.php?option=com_kaprayertimes&view=kaprayertimes&mosque='.$params->get('mosque', '1'));
		return $link = '<a href="'.$hyperlink_link.'">'.$hyperlink_text.'</a>';
	}
}
