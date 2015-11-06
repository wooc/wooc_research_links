<?php
namespace Wooc\WebtreesAddon\WoocResearchLinksModule;

class familysearch_plugin extends research_base_plugin {
	static function getPluginName() {
		return 'Family Search';
	}

	static function getImage() {
		return '/images/familysearch.png';
	}

	static function createLink($fullname, $givn, $first, $middle, $prefix, $surn, $surname) {
		return $link = 'https://familysearch.org/search/record/results#count=20&query=%2Bgivenname%3A%22'
						.rawurlencode($givn)
						.'%22~%20%2Bsurname%3A%22'
						.rawurlencode($surname)
						.'%22~';
	}

	static function createSublink($fullname, $givn, $first, $middle, $prefix, $surn, $surname) {
		return false;
	}

	static function encodePlus() {
		return false;	
	}
}
