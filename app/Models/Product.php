<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 28 Aug 2017 06:57:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Product
 * 
 * @property string $id
 * @property int $category_id
 * @property string $name
 * @property float $price
 * @property int $discount
 * @property float $discount_flat
 * @property float $price_discounted
 * @property int $quantity
 * @property int $weight
 * @property string description
 * @property int $is_ready
 * @property int $status_id
 * @property string $created_by
 * @property \Carbon\Carbon $created_on
 * @property string $modified_by
 * @property \Carbon\Carbon $modified_on
 * 
 * @property \App\Models\Status $status
 * @property \Illuminate\Database\Eloquent\Collection $carts
 * @property \Illuminate\Database\Eloquent\Collection $transaction_details
 * @property \Illuminate\Database\Eloquent\Collection $product_properties
 *
 * @package App\Models
 */
class Product extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	//protected $dateFormat = "U";

	protected $casts = [
		'price' => 'float',
		'discount' => 'int',
		'discount_flat' => 'float',
		'price_discounted' => 'float',
		'quantity' => 'int',
		'weight' => 'int',
        'is_ready'  => 'int',
		'status_id' => 'int'
	];

	protected $dates = [
		'created_on',
		'modified_on'
	];

	protected $fillable = [
	    'id',
		'name',
        'category_id',
		'price',
		'discount',
		'discount_flat',
		'price_discounted',
		'quantity',
		'weight',
        'description',
        'is_ready',
		'status_id',
		'created_by',
		'created_on',
		'modified_by',
		'modified_on'
	];

	public function status()
	{
		return $this->belongsTo(\App\Models\Status::class);
	}

	public function carts()
	{
		return $this->hasMany(\App\Models\Cart::class);
	}

	public function transaction_details()
	{
		return $this->hasMany(\App\Models\TransactionDetail::class);
	}

	public function category(){
	    return $this->belongsTo(\App\Models\Category::class);
    }

    public function product_image(){
	    return $this->hasMany(\App\Models\ProductImage::class);
    }

    public function product_properties()
    {
        return $this->hasMany(\App\Models\ProductProperty::class);
    }

	public function getPriceAttribute(){
        return number_format($this->attributes['price'], 0, ",", ".");
    }

    public function getDiscountFlatAttribute(){
	    if(!empty($this->attributes['discount_flat'])){
            return number_format($this->attributes['discount_flat'], 0, ",", ".");
        }
    }

    public function getPriceDiscountedAttribute(){
        if(!empty($this->attributes['price_discounted'])){
            return number_format($this->attributes['price_discounted'], 0, ",", ".");
        }
    }
}
