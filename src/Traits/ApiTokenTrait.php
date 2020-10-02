<?php

namespace app\Traits;

trait ApiTokenTrait
{
    /**
     * @var string
     */
    private $apiToken;

    public function __construct(string $apiToken)
    {
        $this->apiToken = $apiToken;
    }
}