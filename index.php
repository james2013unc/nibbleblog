<?php

/*
 * Nibbleblog -
 * http://www.nibbleblog.com
 * Author Diego Najar

 * All Nibbleblog code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
*/

// Check installation
if( !file_exists('content/private') )
{
	header('Location:install.php');
	exit('<a href="./install.php">click to install Nibbleblog</a>');
}

// Boot
require('admin/boot/blog.bit');

// Plugins
foreach($plugins as $plugin)
	$plugin->boot();

// Load the controller if is set
if(file_exists(THEME_CONTROLLERS.$layout['controller']))
	require(THEME_CONTROLLERS.$layout['controller']);

// Load the template and view
require(THEME_TEMPLATES.$layout['template']);

?>