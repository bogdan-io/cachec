<?php

namespace Bog\Cache;

use Psr\SimpleCache\CacheInterface;
use Closure;

class CacheManager implements CacheInterface, ManagerInterface
{
    public function get($key, $default = null)
    {

    }
    public function set($key, $value, $ttl = null)
    {

    }
    public function delete($key)
    {

    }
    public function clear()
    {

    }
    public function getMultiple($keys, $default = null)
    {

    }
    public function setMultiple($values, $ttl = null)
    {

    }
    public function deleteMultiple($keys)
    {

    }
    public function has($key)
    {

    }

    public function driver(string $driver): CacheInterface
    {
        return $this;
    }

    public function extend(string $driver, Closure $callBack): ManagerInterface
    {
        return $this;
    }
}