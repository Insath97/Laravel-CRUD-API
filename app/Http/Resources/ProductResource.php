<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [
            /* namma kudukura name => $this->return aahura database colum name */
            'id' => $this->id,
            'product_name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'created_at' => $this->created_at
        ];
    }
}
