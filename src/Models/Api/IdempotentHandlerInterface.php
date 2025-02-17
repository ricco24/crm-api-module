<?php

namespace Crm\ApiModule\Api;

use Tomaj\NetteApi\Response\ResponseInterface;

interface IdempotentHandlerInterface
{
    public function idempotentHandle(array $params): ResponseInterface;
}
