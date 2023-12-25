<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShortenedUrlResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'visit' => $this->visit,
            'main_url' => $this->main_url,
            'short_url' => $this->short_url,
            'created_at' => $this->created_at,
            'user' => $this->user,
        ];
    }
}
