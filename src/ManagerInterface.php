<?php

namespace Bog\Cache;

use Closure;
use Psr\SimpleCache\CacheInterface;

interface ManagerInterface
{
    public function driver(string $driver): CacheInterface;
    public function extend(string $driver, Closure $callBack): ManagerInterface;
}
