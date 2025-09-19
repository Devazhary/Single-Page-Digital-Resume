<?php

namespace App\DataObject;

readonly class Work
{
    public function __construct(
        public string $name,
        public string $position,
        public string $url,
        public string $startDate,
        public string $endDate,
        public string $summary,
        /** @var string[] */
        public array $highlights
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? '',
            position: $data['position'] ?? '',
            url: $data['url'] ?? '',
            startDate: $data['startDate'] ?? '',
            endDate: $data['endDate'] ?? '',
            summary: $data['summary'] ?? '',
            highlights: $data['highlights'] ?? []
        );
    }
}
