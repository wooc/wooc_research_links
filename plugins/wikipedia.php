<?php
namespace Wooc\WebtreesAddon\WoocResearchLinksModule;

class wikipedia_plugin extends research_base_plugin {
	static function getPluginName() {
		return 'Wikipedia';
	}

	static function getImage() {
		return '/images/wikipedia.png';
	}

	static function createLink($fullname, $givn, $first, $middle, $prefix, $surn, $surname) {
		$language = substr(WT_LOCALE, 0, 2);	
		return $link = 'https://'.$language.'.wikipedia.org/wiki/'.($givn).'_'.($surname);
	}
	
	static function createSublink($fullname, $givn, $first, $middle, $prefix, $surn, $surname) {
		return false;
	}

	static function encodePlus() {
		return false;	
	}
}
