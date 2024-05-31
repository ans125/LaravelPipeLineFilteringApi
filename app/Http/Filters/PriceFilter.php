<?php
namespace App\Http\Filters;

use Closure;

class PriceFilter
{
    public function handle($request, Closure $next)
    {
        if (!request()->has('price')) {
            return $next($request);
        }

        $builder = $next($request);
        return $builder->where('price', request('price'));

        // other option
        // $price = request('price');
        // if (!empty($price)) {
        //     $posts = $price->where('price', $price);
        // }
        // return $next($posts);
    }
}
