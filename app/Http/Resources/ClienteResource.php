<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ClienteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'indentify' => $this->id,
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'date' => $this->date,
            'cidade' => $this->cidade, 
            'estado' => $this->estado,
            'sexo' => $this->sexo,
        ];
    }
}
