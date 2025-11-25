<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);

        // Staff
        User::factory()->create([
            'name' => 'Staff User',
            'email' => 'staff@example.com',
            'role' => 'staff',
            'password' => bcrypt('password'),
        ]);

        // Viewer
        User::factory()->create([
            'name' => 'Viewer User',
            'email' => 'viewer@example.com',
            'role' => 'viewer',
            'password' => bcrypt('password'),
        ]);

        // Authors
        $authors = Author::factory(10)->create();

        // Books
        $books = Book::factory(50)->create([
            'author_id' => fn() => $authors->random()->id,
        ]);

        // Categories (10 random)
        $categories = Category::factory(10)->create();

        // 🔥 Assign category ke setiap book (1–3 kategori)
        foreach ($books as $book) {
            $book->categories()->sync(
                $categories->random(rand(1, 3))->pluck('id')
            );
        }
    }
}
