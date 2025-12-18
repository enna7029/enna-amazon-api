<?php

namespace Enna\AmazonApi;

class Configuration
{
    public const REQUIRED_CONFIG_KEYS = [
        'lwaClientId',
        'lwaClientSecret',
        'awsAccessKeyId',
        'awsSecretAccessKey',
        'endpoint',
    ];
}