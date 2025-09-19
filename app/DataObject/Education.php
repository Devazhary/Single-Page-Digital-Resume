<?php

namespace App\DataObject;

readonly class Education
{
    public function __construct(
        public string $institution,
        public string $url,
        public string $area,
        public string $studyType,
        public string $startDate,
        public string $endDate,
        public string $score,
        /** @var string[] */
        public array $courses
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            institution: $data['institution'] ?? '',
            url: $data['url'] ?? '',
            area: $data['area'] ?? '',
            studyType: $data['studyType'] ?? '',
            startDate: $data['startDate'] ?? '',
            endDate: $data['endDate'] ?? '',
            score: $data['score'] ?? '',
            courses: $data['courses'] ?? []
        );
    }
}
