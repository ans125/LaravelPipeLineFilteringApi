<?php
namespace App\Http\Pipelines;

use App\Http\Filters\NameFilter;
use App\Http\Filters\PriceFilter;
use Illuminate\Pipeline\Pipeline;

class ProductPipeline
{
    public static function apply($query)
    {
        return app(Pipeline::class)
            ->send($query)
            ->through([
                NameFilter::class,
                PriceFilter::class,
            ])
            ->thenReturn();
    }
}
