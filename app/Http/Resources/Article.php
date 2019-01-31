<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'createdOn' => $this->created_at->timestamp,
            'updatedOn' => $this->updated_at->timestamp,
            'deletedOn' => $this->deleted_at ? $this->deleted_at->timestamp : null,
        ];
    }
}
