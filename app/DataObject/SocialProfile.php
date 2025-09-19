<?php

namespace App\DataObject;

readonly class SocialProfile
{
   public function __construct(
      public string $network,
      public string $username,
      public string $url
   ) {}

   public static function FromArray(array $data)
   {
        return new self(
            network : $data['network'] ?? '',
            username : $data['username'] ?? '',
            url : $data['url']
        );
   }

}