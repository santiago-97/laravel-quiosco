<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoriaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        // Puedes darle formato de lo quieres devolver, y la forma como lo queires devolver en el JSON
        // 'nombre_id' => $this->id . ' - ' . $this->nombre
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'icono' => $this->icono,
        ];
    }
}
