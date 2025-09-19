<?php

namespace App\DataObject;

readonly class Resume
{
    public function __construct(
        public Basics $basics,
        /** @var Work[] */
        public array $work,
        /** @var Volunteer[] */
        public array $volunteer,
        /** @var Education[] */
        public array $education,
        /** @var Award[] */
        public array $awards,
        /** @var Certificate[] */
        public array $certificates,
        /** @var Publication[] */
        public array $publications,
        /** @var Skill[] */
        public array $skills,
        /** @var Language[] */
        public array $languages,
        /** @var Interest[] */
        public array $interests,
        /** @var Reference[] */
        public array $references,
        /** @var Project[] */
        public array $projects,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            basics: Basics::fromArray($data['basics'] ?? []),
            work: array_map(fn($w) => Work::fromArray($w), $data['work'] ?? []),
            volunteer: array_map(fn($v) => Volunteer::fromArray($v), $data['volunteer'] ?? []),
            education: array_map(fn($e) => Education::fromArray($e), $data['education'] ?? []),
            awards: array_map(fn($a) => Award::fromArray($a), $data['awards'] ?? []),
            certificates: array_map(fn($c) => Certificate::fromArray($c), $data['certificates'] ?? []),
            publications: array_map(fn($p) => Publication::fromArray($p), $data['publications'] ?? []),
            skills: array_map(fn($s) => Skill::fromArray($s), $data['skills'] ?? []),
            languages: array_map(fn($l) => Language::fromArray($l), $data['languages'] ?? []),
            interests: array_map(fn($i) => Interest::fromArray($i), $data['interests'] ?? []),
            references: array_map(fn($r) => Reference::fromArray($r), $data['references'] ?? []),
            projects: array_map(fn($p) => Project::fromArray($p), $data['projects'] ?? []),
        );
    }
}
