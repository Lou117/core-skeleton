<?php
/**
 * Created by PhpStorm.
 * User: Sylvain Glaçon
 * Date: 01/11/2017
 * Time: 18:37
 */
namespace Skeleton;

use Lou117\Core\AbstractController;
use Lou117\Core\ResponseFactory;
use Psr\Http\Message\ResponseInterface;

class PingController extends AbstractController
{
    /**
     * Sends a JSON response with some basic information.
     *
     * @return ResponseInterface
     */
    public function ping(): ResponseInterface
    {
        $response = ResponseFactory::createJsonResponse([
            'text' => 'Welcome to Core framework v2!',
            'link' => 'https://github.com/lou117/core'
        ]);

        return $response->withHeader("X-Core-Ack", time());
    }
}
