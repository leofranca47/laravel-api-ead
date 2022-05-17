<?php

namespace App\Models;


class Support extends BaseModel
{
    protected $fillable = [
        "status",
        "description",
    ];

    public $statusOptions = [
        "P" => "Pendente, Aguardando Professor",
        "A" => "Aguardando Aluno",
        "C" => "Concluído",
    ];
}
