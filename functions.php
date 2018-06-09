<?php
/**
* @package LeoWP-Workflow
* @author Leonardo Pereira <leonardo@leowpdeveloper.com.br>
*/
?><?php
define('SITE_HOME', get_home_url());
define('SITE_URL', get_stylesheet_directory_uri());
define('SITE_NAME', get_bloginfo('name'));
define('SITE_SUBNAME', get_bloginfo('description'));
require_once dirname(__FILE__) . '/config/init.php';