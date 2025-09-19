<?php

namespace App\DataObject;

readonly class Volunteer
{
    public function __construct(
        public string $organization,
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
            organization: $data['organization'] ?? '',
            position: $data['position'] ?? '',
            url: $data['url'] ?? '',
            startDate: $data['startDate'] ?? '',
            endDate: $data['endDate'] ?? '',
            summary: $data['summary'] ?? '',
            highlights: $data['highlights'] ?? []
        );
    }
}
