<?php

/*
	Question2Answer 1.5 (c) 2011, Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-plugin/Kielce-backup/qa-plugin.php
	Version: 1.5
	Date: 2011-12-28 12:00:00 GMT
	Description: Initiates Database Backup plugin


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

/*
	Plugin Name: Database Backup
	Plugin URI: 
	Plugin Description: Database import/export utility
	Plugin Version: 1.0
	Plugin Date: 2011-10-20
	Plugin Author: Krzysztof Kielce
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.4
*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}


	qa_register_plugin_layer('qa-backup-layer.php', 'Backup Widget Form Layer');	
	qa_register_plugin_module('module', 'qa-backup.php', 'qa_backup', 'Database Backup');

/*
	Omit PHP closing tag to help avoid accidental output
*/