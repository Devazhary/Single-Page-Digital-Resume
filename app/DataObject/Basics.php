<?php

namespace App\DataObject;

readonly class Basics
{
    public function __construct(
        public string $name,
        public string $label,
        public string $email,
        public string $phone,
        public string $summary,
        public Location $location,
        /** @var SocialProfile[] */
        public array $profiles
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? '',
            label: $data['label'] ?? '',
            email: $data['email'] ?? '',
            phone: $data['phone'] ?? '',
            summary: $data['summary'] ?? '',
            location: Location::fromArray($data['location'] ?? []),
            profiles: array_map(
                fn($profile) => SocialProfile::fromArray($profile),
                $data['profiles'] ?? []
            )
        );
    }
}
