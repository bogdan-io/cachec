<?php

namespace Bog\Cache\Tests;

use Bog\Cache\CacheManager;
use Bog\Cache\ManagerInterface;
use Psr\SimpleCache\CacheInterface;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertTrue;



it('tests CacheManager acts like a driver', function () {
    assertTrue((new CacheManager) instanceof CacheInterface);
});

it('tests CacheManager acts like a manager', function () {
    assertTrue((new CacheManager) instanceof ManagerInterface);
});

test('CacheManager has a default driver', function () {
    $cacheManager = new CacheManager;
    $cacheManager->set('hu', 'mu');
    assertEquals($cacheManager->get('hu'), 'mu');
});