<?php

namespace Anomaly\TodoModule\Todo;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class TodoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var TodoModel
     */
    protected $model = TodoModel::class;


    /**
     * @return array
     * @throws \Exception
     */
    public function definition()
    {
        return [
            "slug" => Arr::random(["slug 1", "slug 2", "slug 3"]),
            "name" => Arr::random(["isim 1, isim 2, isim 3"]),
        ];
    }
}
