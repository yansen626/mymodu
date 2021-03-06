<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 28 Aug 2017 06:57:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cart
 * 
 * @property int $id
 * @property string $product_id
 * @property string $user_id
 * @property int $quantity
 * @property float $price
 * @property float $total_price
 * @property int $courier_id
 * @property int $delivery_type_id
 * @property float $delivery_fee
 * @property float $admin_fee
 * @property string $order_id
 * @property int $payment_method
 * @property string $buyer_note
 * @property string $note
 * @property int $weight_option
 * @property string $size_option
 * @property string $qty_option
 *
 * @property \App\Models\Product $product
 * @property \App\Models\User $user
 * @property \App\Models\Courier $courier
 * @property \App\Models\DeliveryType $delivery_type
 *
 * @package App\Models
 */
class Cart extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'quantity' => 'int',
		'total_price' => 'float',
        'delivery_fee' => 'float',
        'admin_fee' => 'float',
        'payment_method' => 'int',
        'weight_option' => 'int',
        'price' => 'float'
	];

	protected $fillable = [
		'product_id',
		'user_id',
		'quantity',
        'price',
		'total_price',
        'courier_id',
        'delivery_type_id',
        'delivery_fee',
        'admin_fee',
        'order_id',
        'payment_method',
        'buyer_note',
        'note',
        'weight_option',
        'size_option',
        'qty_option'
	];

	public function product()
	{
		return $this->belongsTo(\App\Models\Product::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}

    public function getPriceAttribute(){
        return number_format($this->attributes['price'], 0, ",", ".");
    }

    public function getTotalPriceAttribute(){
        return number_format($this->attributes['total_price'], 0, ",", ".");
    }

    public function courier()
    {
        return $this->belongsTo(\App\Models\Courier::class);
    }

    public function deliveryType()
    {
        return $this->belongsTo(\App\Models\DeliveryType::class);
    }

    public function getDeliveryFeeAttribute(){
        return number_format($this->attributes['delivery_fee'], 0, ",", ".");
    }

    public function getAdminFeeAttribute(){
        return number_format($this->attributes['admin_fee'], 0, ",", ".");
    }
}
