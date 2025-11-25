<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'isbn' => fake()->unique()->isbn13(),
            'title' => fake()->sentence(3),
            'author_id' => Author::factory(),
            'publisher' => fake()->company(),
            'year' => fake()->numberBetween(1950, 2024),
            'status' => fake()->randomElement(['available', 'borrowed']),
            'description' => fake()->paragraph(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Book $book) {
            // Ambil 1–3 kategori random
            $categories = Category::inRandomOrder()
                ->take(rand(1, 3))
                ->pluck('id');

            $book->categories()->sync($categories);
        });
    }
}

