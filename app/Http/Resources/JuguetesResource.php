<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JuguetesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request) {
        
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'nombre_juguete' => $this->nombre_juguete,
            'descripcion' => $this->descripcion,
            'fecha_publicacion' => $this->fecha_publicacion
        ];

    }
}
