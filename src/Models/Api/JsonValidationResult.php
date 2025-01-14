<?php

namespace Crm\ApiModule\Api;

use Tomaj\NetteApi\Response\JsonApiResponse;

class JsonValidationResult
{
    private $parsedObject;

    private $errorResponse;

    public static function error(JsonApiResponse $errorResponse)
    {
        return new JsonValidationResult(null, $errorResponse);
    }

    public static function json($parsedObject)
    {
        return new JsonValidationResult($parsedObject, null);
    }

    private function __construct($parsedObject, ?JsonApiResponse $errorResponse)
    {
        $this->parsedObject = $parsedObject;
        $this->errorResponse = $errorResponse;
    }

    public function getParsedObject()
    {
        return $this->parsedObject;
    }

    public function getErrorResponse(): ?JsonApiResponse
    {
        return $this->errorResponse;
    }

    public function hasErrorResponse(): bool
    {
        return $this->errorResponse !== null;
    }
}
