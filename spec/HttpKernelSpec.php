<?php

use Kyffoo\Kernel\HttpKernel;
use Psr\Http\Message\ResponseInterface;

describe(HttpKernel::class, function () {

    describe('::make', function () {

        it('should return a HttpResponse', function() {
            $kernel = new HttpKernel('dev', true);
            $response = $kernel->make();
            expect($response)->toBeAnInstanceOf(ResponseInterface::class);
        });
    });
});