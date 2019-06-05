<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TestResource extends JsonResource
{
   /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
   // public function toArray($request)
   // {
   //    return parent::toArray($request);
   // }
   public function toArray($request)
   {
      // return parent::toArray($request);
      return [
         'id' => $this->id,
         'ab1' => $this->ab1,
         'ab2' => $this->ab2,
         'ab3' => $this->ab3,
         'ab4' => $this->ab4,
         'ab5' => $this->ab5,
         'created_at' => $this->created_at,
         'updated_at' => $this->updated_at,
      ];
   }
}
