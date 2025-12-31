<?php

namespace Enna\AmazonApi\Contract;

use DateTime;
use Psr\Http\Message\RequestInterface;
use Enna\AmazonApi\Credentials;

interface AuthorizationSignerContract
{
    public function sign(RequestInterface $request, Credentials $credentials): RequestInterface;

    public function setRequestTime(?DateTime $datetime = null): void;

    public function formattedRequestTime(?bool $withTime = true): ?string;
}