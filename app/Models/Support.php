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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
