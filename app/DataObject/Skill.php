<?php

namespace App\DataObject;

readonly class Skill
{
    public function __construct(
        public string $name,
        public string $level,
        /** @var string[] */
        public array $keywords
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? '',
            level: $data['level'] ?? '',
            keywords: $data['keywords'] ?? []
        );
    }
}
