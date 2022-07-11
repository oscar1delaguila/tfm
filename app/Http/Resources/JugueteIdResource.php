<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JugueteIdResource extends JsonResource
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
        'fecha_publicacion' => $this->fecha_publicacion,
        'descripcion' => $this->descripcion,
        'categorias' => CategoriasResource::collection($this->categorias()->get()),
        'path_imagen' => $this->path_imagen
        
        ];

    }
}
