<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='payment';
    protected $fillable=[

        'firstname',
        'lastname',
        'email',
        'phonenumber',
        'address1',
        'address2',
        'city',
        'state',
        'country',
        'pincode',




    ];
/**
 * Get the user that owns the Payment
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function user(): BelongsTo
{
    return $this->belongsTo(User::class, 'user_id', 'id');
}



}
