<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BaseResource extends JsonResource
{
    public function toArray($request)
    {
    }

    public function with($request)
    {
        return
        [
            'meta' => [
                'api_version' => 'v1',
                'author' => 'OpenJustice.be ASBL/VZW/Non-profit organisation',
                'tagline' => 'Citizen initiative to make digital data, tools and services available for Belgian Justice',
                'disclaimer' => '⚠ What you are seeing is raw technical data formatted in a human readable way. It is not meant to be user-friendly. To access a more user-friendy service, please visit omdat.openjustice.be',
            ],
          
            'links' => [
                'self' => $this->self_link,
                'parent' => $this->parent_link,
            ],
        ];
    }
}