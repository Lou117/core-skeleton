<?php
/**
 * Created by PhpStorm.
 * User: Sylvain Glaçon
 * Date: 01/11/2017
 * Time: 18:30
 */

/**
 * See Core framework routing documentation.
 */
return [
    "ping" => [
        "methods" => ["GET"],
        "endpoint" => "/ping",
        "controller" => "Skeleton\PingController::ping"
    ]
];
