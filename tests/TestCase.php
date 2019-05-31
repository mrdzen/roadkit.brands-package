<?php

namespace Roadkit\BrandsMapping\Tests;

use Roadkit\BrandsMapping\BrandsMappingServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [BrandsMappingServiceProvider::class];
    }

    /**
     * @param $object
     * @param $method
     * @param array $args
     * @return mixed
     * @throws \ReflectionException
     */
    public static function callProtectedMethod($object, $method, array $args = [])
    {
        $class  = new \ReflectionClass(get_class($object));
        $method = $class->getMethod($method);
        $method->setAccessible(true);
        return $method->invokeArgs($object, $args);
    }

}