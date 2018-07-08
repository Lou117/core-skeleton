<?php
/**
 * Created by PhpStorm.
 * User: Sylvain Glaçon
 * Date: 01/11/2017
 * Time: 18:43
 */

use Lou117\Core\Core;

// Requiring Composer autoloader before changing working directory to avoid IDE warnings
require("../vendor/autoload.php");

// Changing working directory
chdir(__DIR__.'/../');

// Initializing Core
$core = new Core("config/settings.php", "config/routes.php");

// Running Core
$core->run();
