<?php

namespace App\Data;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class CategoriesData extends Data
{
    public function __construct(
        public int|Optional $id,
        public string|Optional $reference,
        public string $name,
        public string $description,
    ) {}
}
