<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServicesListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'has_offer' =>  $this->has_offer,
            'discount_percentage' => $this->discount_percentage,
            'image' => $this->image,
            'content' => $this->content,
            'average_rating' => (float)$this->average_rating,
            'is_featured' => $this->package_id > 0,
            'store' => $this->store
        ];
    }
}
