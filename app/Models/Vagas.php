<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vagas extends Model
{
    use HasFactory;
    protected $table = "vagas";

    public function situacao()
    {
        return $this->hasOne(Situacao::class, 'id', 'situacao_id');
    }
}
