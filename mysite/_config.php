<?php

global $project;
$project = 'mysite';

/* What kind of environment is this: development, test, or live (ie, production */
Director::set_environment_type("dev");

// Use _ss_environment.php file for configuration include
//require_once("conf/ConfigureFromEnv.php");

$dbname = "SS_dbname";
$server = "localhost";
$username = "";
$password = "";

//global $database;
//$database = $dbname;

/* Cloud Values override */
$dbname = (getenv("OPENSHIFT_DB_USERNAME") != FALSE) ? $_ENV['OPENSHIFT_DB_USERNAME'] : "SS_dbname";
$server = (getenv('OPENSHIFT_DB_HOST') !== FALSE) ? $_ENV['OPENSHIFT_DB_HOST'] : "localhost";
$username = (getenv("OPENSHIFT_DB_USERNAME") != FALSE) ? $_ENV['OPENSHIFT_DB_USERNAME'] : "root";
$password = (getenv("OPENSHIFT_DB_PASSWORD") != FALSE) ? $_ENV['OPENSHIFT_DB_PASSWORD'] : "";

global $databaseConfig;
$databaseConfig = array(
        "type" => 'MySQLDatabase',
        "server" => $server,
        "username" => $username,
        "password" => $password,
        "database" => $dbname,
        "path" => '',
);

MySQLDatabase::set_connection_charset('utf8');

// This line set's the current theme. More themes can be
// downloaded online
SSViewer::set_theme('blackcandy');

// Set the site locale
i18n::set_locale('en_US');

// enable nested URLs for this site (e.g. page/sub-page/)
SiteTree::enable_nested_urls();

/* Set CMS Name */
LeftAndMain::setApplicationName("Emelle.me Content Manager");
LeftAndMain::set_loading_image('http://www.emelle.me/assets/images/Logo.loading.png','height:100px;width:584px');

/* Configure a default username and password to access the CMS on all sites in */
Security::setDefaultAdmin('admin','somepassword');