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
            'api_version' => 'v1',
            'author' => 'OpenJustice.be ASBL/VZW/Non-profit organisation',
            'tagline' => 'Citizen initiative to make digital data, tools and services available for Belgian Justice',
            'links' => [
                'self' => $this->self_link,
                'parent' => $this->parent_link,
            ],
        ];
    }
}
