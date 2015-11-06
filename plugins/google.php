<?php
namespace Wooc\WebtreesAddon\WoocResearchLinksModule;

class google_plugin extends research_base_plugin {
	static function getPluginName() {
		return 'Google';
	}	

	static function getImage() {
		return '/images/google.png';
	}

	static function createLink($fullname, $givn, $first, $middle, $prefix, $surn, $surname) {
		$language = substr(WT_LOCALE, 0, 2);	
		return $link = 'https://www.google.'.$language.'/search?q='.str_replace(" ", "+", $fullname);
	}

	static function createSublink($fullname, $givn, $first, $middle, $prefix, $surn, $surname) {
		return false;
	}

	static function encodePlus() {
		return true;	
	}
}
