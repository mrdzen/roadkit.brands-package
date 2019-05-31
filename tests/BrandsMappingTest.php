<?php

namespace Roadkit\BrandsMapping\Tests;

use Roadkit\BrandsMapping\BrandsMappingFacade;

class BrandsMappingTest extends TestCase
{
    /**
     * @param \Illuminate\Foundation\Application $app
     */
    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('brands-mapping.shate', [
            'BLUEPRINT' => 'BLUE PRINT'
        ]);
    }

    /** @test */
    public function testNormalize()
    {
        $this->assertEquals('BLUE PRINT', BrandsMappingFacade::normalize('BLUEPRINT', 'shate'));
    }

    /** @test */
    public function testNormalizeEmptyProvider()
    {
        $this->assertEquals('BLUEPRINT', BrandsMappingFacade::normalize('BLUEPRINT', ''));
    }

    /** @test */
    public function testNormalizeEmptyNotExistingBrandOrProvider()
    {
        $this->assertEquals('BRANDANOTHER', BrandsMappingFacade::normalize('BRANDANOTHER', 'shate'));
        $this->assertEquals('BRANDANOTHER', BrandsMappingFacade::normalize('BRANDANOTHER', 'PROVIDERANOTHER'));
    }

    /** @test */
    public function testOrigin()
    {
        $this->assertEquals('BLUEPRINT', BrandsMappingFacade::origin('BLUE PRINT', 'shate'));
    }

    /** @test */
    public function testOriginEmptyProvider()
    {
        $this->assertEquals('BLUE PRINT', BrandsMappingFacade::origin('BLUE PRINT', ''));
    }

    /** @test */
    public function testOriginEmptyNotExistingBrandOrProvider()
    {
        $this->assertEquals('BRANDANOTHER', BrandsMappingFacade::normalize('BRANDANOTHER', 'shate'));
        $this->assertEquals('BRANDANOTHER', BrandsMappingFacade::normalize('BRANDANOTHER', 'PROVIDERANOTHER'));
    }
}
