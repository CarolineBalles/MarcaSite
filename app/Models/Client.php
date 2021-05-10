<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    protected $fillable = [
        'company_name',
		'fantasy_name',
		'cnpj',
		'address',
		'email',
		'telephone',
		'name',
		'cpf',
		'cell'
    ];
}
