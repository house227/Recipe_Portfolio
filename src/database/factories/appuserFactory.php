<?php

namespace Database\Factories;

use App\Models\appuser;
use Illuminate\Database\Eloquent\Factories\Factory;

class appuserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'カラム名' => 設定したい値,
            'name' => $this->faker->name,
            'mail' => $this->faker->safeEmail,
            'pass' => $this->faker->password($minLength = 6, $maxLength = 20),
            'introduction' => $this->faker->text($maxNbChars = 200),
            'photo' => $this->faker->imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false)
        ];
    }
}
