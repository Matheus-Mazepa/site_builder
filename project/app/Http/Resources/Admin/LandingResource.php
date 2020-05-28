<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class LandingResource extends JsonResource
{
    public function toArray($request)
    {
        $user = current_user();

        return [
            'id' => $this->id,
            'path' => $this->path,
            'created_at' => format_date($this->created_at),
            'links' => [
            ],
        ];
    }
}
