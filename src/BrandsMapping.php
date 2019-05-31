<?php

namespace Roadkit\BrandsMapping;

class BrandsMapping
{
    /**
     * Get normalize value from origin
     *
     * @param string $origin
     * @param string $provider
     * @return string
     */
    public function normalize($origin, $provider) :? string
    {
        return config('brands-mapping.'. $provider . '.' . $origin, $origin);
    }

    /**
     * Get origin value from normalize
     *
     * @param string $normalize
     * @param string $provider
     * @return string
     */
    public function origin($normalize, $provider) :? string
    {
        $array = array_flip(config('brands-mapping.'. $provider, []));

        return $array[$normalize] ?? $normalize;
    }
}
