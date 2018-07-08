<?php
/**
 * Created by PhpStorm.
 * User: Sylvain Glaçon
 * Date: 01/11/2017
 * Time: 18:43
 */

use Lou117\Core\Core;

chdir(__DIR__.'/../');

$core = new Core("/config/settings.php", "/config/routes.php");
$core->run();
