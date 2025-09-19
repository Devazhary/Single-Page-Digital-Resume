<?php

namespace App\DataObject;

readonly class Interest
{
    public function __construct(
        public string $name,
        /** @var string[] */
        public array $keywords
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? '',
            keywords: $data['keywords'] ?? []
        );
    }
}
