<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=[
        'name','descrption','image','category_id','quantity'


    ];
    public $wqww='proooo';

    /**
     * Get the user that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Getcategory(): BelongsTo
        {
            return $this->belongsTo(Category::class, 'category_id','id');
        }
   public function Categ(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
