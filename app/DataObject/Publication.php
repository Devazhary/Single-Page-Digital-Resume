<?php

namespace App\DataObject;

readonly class Publication
{
    public function __construct(
        public string $name,
        public string $publisher,
        public string $releaseDate,
        public string $url,
        public string $summary
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? '',
            publisher: $data['publisher'] ?? '',
            releaseDate: $data['releaseDate'] ?? '',
            url: $data['url'] ?? '',
            summary: $data['summary'] ?? ''
        );
    }
}
