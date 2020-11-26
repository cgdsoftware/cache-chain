<?php

namespace LaravelEnso\CacheChain\Exceptions;

use Exception;

class Chain extends Exception
{
    public static function emptyAdapaters(): self
    {
        return new static(__('No cache adapters provided'));
    }
}
