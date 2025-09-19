<?php

namespace App\DataObject;

readonly class Award
{
    public function __construct(
        public string $title,
        public string $date,
        public string $awarder,
        public string $summary
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            title: $data['title'] ?? '',
            date: $data['date'] ?? '',
            awarder: $data['awarder'] ?? '',
            summary: $data['summary'] ?? ''
        );
    }
}
