<?php

namespace App\DataObject;

readonly class Certificate
{
    public function __construct(
        public string $name,
        public string $date,
        public string $issuer,
        public string $url
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? '',
            date: $data['date'] ?? '',
            issuer: $data['issuer'] ?? '',
            url: $data['url'] ?? ''
        );
    }
}
