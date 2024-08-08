<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // dd($request);
        return [
            'conta_id' => $this->conta_id,
            'conta' => $this->conta,
            'inativo' => $this->inativo,
        ];
    }
}