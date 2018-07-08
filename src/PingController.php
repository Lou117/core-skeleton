<?php
/**
 * Created by PhpStorm.
 * User: Sylvain Glaçon
 * Date: 01/11/2017
 * Time: 18:37
 */
namespace Skeleton;

use Lou117\Core\AbstractController;
use Lou117\Core\Http\Response\JsonResponse;

class PingController extends AbstractController
{
    /**
     * Sends a JSON response with some basic information.
     *
     * @return JsonResponse
     */
    public function ping(): JsonResponse
    {
        $response = new JsonResponse([
            'text' => 'Welcome to Core framework v2!',
            'link' => 'https://github.com/lou117/core'
        ]);

        return $response->addHeader('X-Core-Ack', time());
    }
}
