<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Task extends JsonResource
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
            'title' => $this->title,
            'due_date' => $this->due_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }

    public function with($request)
    {
        return [
            'status' => 'OK'
        ];
    }
}