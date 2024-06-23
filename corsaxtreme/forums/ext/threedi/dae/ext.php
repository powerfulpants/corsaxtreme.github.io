<?php
/**
 *
 * Default Avatar Extended. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, 3Di
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace threedi\dae;

/**
 * Default Avatar Extended Extension base
 */
class ext extends \phpbb\extension\base
{
	/* Define constants */
	const DAE_S = '32';
	const DAE_M = '64';
	const DAE_L = '128';

	/**
	 * Check whether or not the extension can be enabled.
	 *
	 * @return bool
	 */
	public function is_enableable()
	{
		if ((phpbb_version_compare(PHPBB_VERSION, '3.1.11', '>=') && phpbb_version_compare(PHPBB_VERSION, '4.0.0@dev', '<')))
		{
			return true;
		}
	}
}
