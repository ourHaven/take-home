<?php

namespace App\Services;

use App\Models\Meal;
use App\Events\MealCreated;

class MealService
{

    public function __construct(protected Meal $meal)
    {}

    public function create(array $data): Meal
    {
        $meal = $this->meal->create($data);

        // Fire the MealCreated event
        MealCreated::dispatch($meal);

        return $meal;
    }
}
