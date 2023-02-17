<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='cart';
    protected $fillable=[
        'user_id',
        'cate_id',
        'pro_id',
        'categoryname',
        'productname'
    ];

/**
 * Get the user that owns the Cart
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function product(): BelongsTo
{
    return $this->belongsTo(Product::class, 'pro_id', 'id');
}


/**
 * Get the category that owns the Cart
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function category(): BelongsTo
{
    return $this->belongsTo(Category::class, 'cate_id', 'id');
}
/**
 * Get the user that owns the Cart
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function user(): BelongsTo
{
    return $this->belongsTo(User::class, 'user_id', 'id');
}
}

