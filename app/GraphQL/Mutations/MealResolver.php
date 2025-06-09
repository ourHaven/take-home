<?php

namespace App\GraphQL\Mutations;

use App\Facades\MealFacade;
use Illuminate\Support\Arr;

class MealResolver
{

    public function create($_, array $args)
    {
        // Pass only 'input' to the facade
        return MealFacade::create(Arr::get($args, 'input'));
    }
}

