<?php

namespace Alphaolomi\Laracon;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alphaolomi\Laracon\Skeleton\SkeletonClass
 */
class LaraconFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laracon';
    }
}
