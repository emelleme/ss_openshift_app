## Overview

Base project folder for a SilverStripe ([http://silverstripe.org](http://silverstripe.org)) installation. Requires additional modules to function:

 * [`sapphire`](http://github.com/silverstripe/sapphire): Module including the base framework
 * [`cms`](http://github.com/silverstripe/silverstripe-cms): Module including a Content Management System
 * `themes/blackcandy` (optional)

## Server Requirements ##

See [doc.silverstripe.org](http://doc.silverstripe.org/sapphire/en/installation/server-requirements)

## Installation ##

See [installation on different platforms](http://doc.silverstripe.org/sapphire/en/installation/),
and [installation from source](http://doc.silverstripe.org/sapphire/en/installation/from-source).

## Links ##

 * [Changelogs](http://doc.silverstripe.org/sapphire/en/changelogs/)
 * [Bugtracker](http://open.silverstripe.org)
 * [Forums](http://silverstripe.org/forums)
 * [Developer Mailinglist](https://groups.google.com/forum/#!forum/silverstripe-dev)

## License ##

	Copyright (c) 2007-2011, SilverStripe Limited - www.silverstripe.com
	All rights reserved.

	Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

	    * Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
	    * Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the 
	      documentation and/or other materials provided with the distribution.
	    * Neither the name of SilverStripe nor the names of its contributors may be used to endorse or promote products derived from this software 
	      without specific prior written permission.

	THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE 
	IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE 
	LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE 
	GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, 
	STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY 
	OF SUCH DAMAGE.

## Sample _ss_environment.php file ##


	/* What kind of environment is this: development, test, or live (ie, production */
	define('SS_ENVIRONMENT_TYPE', 'dev');

	$server = (getenv('OPENSHIFT_DB_HOST') !== FALSE) ? $_ENV['OPENSHIFT_DB_HOST'] : "localhost";
	$username = (getenv("OPENSHIFT_DB_USERNAME") != FALSE) ? $_ENV['OPENSHIFT_DB_USERNAME'] : "root";
	$password = (getenv("OPENSHIFT_DB_PASSWORD") != FALSE) ? $_ENV['OPENSHIFT_DB_PASSWORD'] : "";

	global $_FILE_TO_URL_MAPPING;
	#$_FILE_TO_URL_MAPPING['/home/'] = 'http://localhost';

	/* Database connection */
	define('SS_DATABASE_SERVER', $server);
	define('SS_DATABASE_USERNAME', $username);
	define('SS_DATABASE_PASSWORD', $password);

	/* Configure a default username and password to access the CMS on all sites in */
	define('SS_DEFAULT_ADMIN_USERNAME', 'admin');
	define('SS_DEFAULT_ADMIN_PASSWORD', 'password1');
