<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource as MainResource;

class Resource extends MainResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /*return parent::toArray($request);*/

        return[
            'id' => $this->id,
            'title' => $this->title,
            'desc' => $this->desc,
            'autor' => $this->user->name

        ];
    }
}
