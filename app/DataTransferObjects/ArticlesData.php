<?php

namespace App\DataTransferObjects;

use Carbon\Carbon;

class ArticlesData
{
    public function __construct(
        public readonly ?int $id,
        public readonly string $title,
        public readonly string $excerpt,
        public readonly Carbon $created_at,
        public readonly string $url,
        public readonly string $thumbnail,
        public readonly string $canonical_url,
    ) {
    }
}
