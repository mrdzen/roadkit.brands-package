<?php

namespace Roadkit\BrandsMapping;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Roadkit\BrandsMapping\Skeleton\SkeletonClass
 */
class BrandsMappingFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'brands-mapping';
    }
}
