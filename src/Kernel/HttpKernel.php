<?php

namespace Kyffoo\Kernel;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\ServerRequest;

class HttpKernel
{
    protected $environment;
    protected $debug;
    protected $request;
    protected $response;
    protected $emitter;
    protected $router;

    /**
     * HttpKernel constructor.
     *
     * @param string $environment The environment to use : prod, dev or test
     * @param bool   $debug       Activate debug if true
     */
    public function __construct(string $environment, bool $debug)
    {
        $this->environment = $environment;
        $this->debug       = $debug;
    }

    /**
     * @return Response
     */
    public function make(): Response
    {
        $this->request  = ServerRequest::fromGlobals();
        $this->response = new Response();

        $this->response->getBody()->write('Je suis à la racine');

        return $this->response;
    }

    public function terminate()
    {
    }
}
