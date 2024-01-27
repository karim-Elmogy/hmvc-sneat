<?php

namespace Core\Test\Resources;

use Illuminate\Http\Resources\Json\JsonResource as Resource;

class UnitResource extends Resource
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
            'id'   => $this->id,
            'hwya' => $this->hwya,

            $this->mergeWhen($request->route()->getName() == 'api.v1.units.show', [

            ])
        ];
    }
}
