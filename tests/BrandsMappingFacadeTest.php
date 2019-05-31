<?php

namespace Roadkit\BrandsMapping\Tests;

use Roadkit\BrandsMapping\BrandsMappingFacade;

class BrandsMappingFacadeTest extends TestCase
{
    /** @test */
    public function testManualConstruct()
    {
        $facade = new BrandsMappingFacade();
        $this->assertEquals('brands-mapping', $this->callProtectedMethod($facade, 'getFacadeAccessor'));
    }
}
