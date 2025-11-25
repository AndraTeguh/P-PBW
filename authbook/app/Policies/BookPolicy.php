<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\User;

class BookPolicy
{
    public function before(User $user, $ability)
    {
        // Admin full akses
        if ($user->role === 'admin') {
            return true;
        }
    }

    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'staff', 'viewer']);
    }

    public function view(User $user, Book $book): bool
    {
        return in_array($user->role, ['admin', 'staff', 'viewer']);
    }

    public function create(User $user): bool
    {
        return $user->role === 'staff' || $user->role === 'admin';
    }

    public function update(User $user, Book $book): bool
    {
        return $user->role === 'staff' || $user->role === 'admin';
    }

    public function delete(User $user, Book $book): bool
    {
        return false; // Staff tidak bisa delete, viewer tidak bisa delete
    }

    public function restore(User $user, Book $book): bool
    {
        return false;
    }

    public function forceDelete(User $user, Book $book): bool
    {
        return false;
    }
}
