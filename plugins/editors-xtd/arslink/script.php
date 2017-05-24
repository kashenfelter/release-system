<?php
/**
 * @package   AkeebaReleaseSystem
 * @copyright Copyright (c)2010-2017 Nicholas K. Dionysopoulos
 * @license   GNU General Public License version 3, or later
 */

defined('_JEXEC') or die;

// Load FOF if not already loaded
if (!defined('FOF30_INCLUDED') && !@include_once(JPATH_LIBRARIES . '/fof30/include.php'))
{
	throw new RuntimeException('This extension requires FOF 3.0.');
}

class plgEditorsxtdArslinkInstallerScript extends FOF30\Utils\InstallScript\Plugin
{
	/**
	 * The plugins's name, e.g. foobar (for plg_system_foobar)
	 *
	 * @var   string
	 */
	protected $pluginName = 'arslink';

	/**
	 * The plugins's folder, e.g. system (for plg_system_foobar)
	 *
	 * @var   string
	 */
	protected $pluginFolder = 'editors-xtd';

}