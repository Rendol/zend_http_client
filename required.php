<?php
/*
 * This file is part of Zend.
 */

/*
 * Autoloader and dependency injection initialization for Zend.
 */

// Load Zend class

set_include_path(get_include_path() . PATH_SEPARATOR .  dirname(__FILE__).'/src/');
include_once(dirname(__FILE__).'/src/Zend/Loader.php');