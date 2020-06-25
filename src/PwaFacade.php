<?php

namespace UiBuilder\Pwa;

use Illuminate\Support\Facades\Facade;

/**
 * @see \UiBuilder\Pwa\Skeleton\SkeletonClass
 */
class PwaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pwa';
    }
}
