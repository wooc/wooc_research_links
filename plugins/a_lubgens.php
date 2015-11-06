<?php
/*
 * webtrees - wooc_research_links sidebar module
 *
 * webtrees: Web based Family History software
 * Copyright (C) 2015 webtrees development team.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/
namespace Wooc\WebtreesAddon\WoocResearchLinksModule;

class a_lubgens_plugin extends research_base_plugin {
	static function getPluginName() {
		return 'Lubgens';
	}

	static function getImage() {
		return '/images/lubgens.png';
	}

	static function createLink($fullname, $givn, $first, $middle, $prefix, $surn, $surname) {
		return $link = 'module.php?mod=wooc_research_links&mod_action=ajax&name='.$surname;
	}

	static function createSublink($fullname, $givn, $first, $middle, $prefix, $surn, $surname) {
		return false;
	}

	static function encodePlus() {
		return false;	
	}
}