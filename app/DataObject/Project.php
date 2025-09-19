<?php

namespace App\DataObject;

readonly class Project
{
    public function __construct(
        public string $name,
        public string $startDate,
        public string $endDate,
        public string $description,
        /** @var string[] */
        public array $highlights,
        public string $url
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? '',
            startDate: $data['startDate'] ?? '',
            endDate: $data['endDate'] ?? '',
            description: $data['description'] ?? '',
            highlights: $data['highlights'] ?? [],
            url: $data['url'] ?? ''
        );
    }
}
