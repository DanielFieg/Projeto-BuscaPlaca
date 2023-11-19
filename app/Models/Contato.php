<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Contato extends Model{

    use \Illuminate\Database\Eloquent\Concerns\HasTimestamps;
    protected $table = 'contato';
    protected $fillable = [
        'Nome',
        'Telefone',
        'Email',
        'Mensagem'
    ];
}
