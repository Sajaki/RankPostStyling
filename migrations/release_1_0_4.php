<?php
/**
 *
 * @package Rank Post Styling Extension
 * @copyright (c) 2017 Sajaki
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 */

namespace paybas\rankpoststyling\migrations;

class release_104 extends \phpbb\db\migration\migration
{

	public function effectively_installed()
	{
		return isset($this->config['rps_version']) && version_compare($this->config['rt_version'], '1.0.4', '>=');
	}

	static public function depends_on()
	{
		return array(
			'\paybas\rankpoststyling\migrations\release_1_0_0',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('rps_version', '1.0.4')),
		);
	}
}