<?php namespace GeneaLabs\LaravelModelCaching\Traits;

use GeneaLabs\LaravelPivotEvents\Traits\PivotEventTrait;

trait Cachable
{
    use Caching;
    use ModelCaching;
    use PivotEventTrait {
        ModelCaching::newBelongsToMany insteadof PivotEventTrait;
    }

    public $cacheKeyUsesModelCount = false;
    public $cacheKeyModelCountTTL = 60;

    public $cacheKeyUsesMaxPrimaryKey = false;
    public $cacheKeyMaxPrimaryKeyTTL = 60;
}
