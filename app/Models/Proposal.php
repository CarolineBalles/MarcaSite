<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $table = 'proposals';

    protected $fillable = [
        'client_name',
		'address',
		'service',
		'amount',
		'entrance',
		'number_installments',
		'installments_value',
		'pay_day',
		'installment_date',
		'attachment',
		'status'
    ];
}
