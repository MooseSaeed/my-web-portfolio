<?php

namespace App\DataTransferObjects;

use Carbon\Carbon;

class ArticlesData
{
    public function __construct(
        public readonly ?int $id,
        public readonly ?int $user_id,
        public readonly ?int $category_id,
        public readonly string $title,
        public readonly string $excerpt,
        public readonly string $created_at,
        public readonly string $slug,
        public readonly string $url,
        public readonly string $public_reactions_count,
        public readonly string $page_views_count,
        public readonly string $body,
        public readonly string $thumbnail,
        public readonly string $canonical_url,
        public readonly string $reading_time_minutes,
    ) {
    }
}
