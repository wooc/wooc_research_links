<?php
namespace Wooc\WebtreesAddon\WoocResearchLinksModule;

class findmypast_plugin extends research_base_plugin {
	static function getPluginName() {
		return 'Find My Past';
	}

	static function getImage() {
		return '/images/findmypastuk.png';
	}

	static function createLink($fullname, $givn, $first, $middle, $prefix, $surn, $surname) {
		return $link = 'http://search.findmypast.com/search/world-records?firstname='
						.rawurlencode($givn)
						.'&firstname_variants=true&lastname='
						.rawurlencode($surname);
	}

	static function createSublink($fullname, $givn, $first, $middle, $prefix, $surn, $surname) {
		return false;
	}

	static function encodePlus() {
		return false;	
	}
}
