<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Pembayaran
 *
 * @property $id
 * @property $pemesanan_id
 * @property $charge_id
 * @property $status
 * @property $payment_amount
 * @property $payment_amount_crypto
 * @property $crypto_currency
 * @property $tx_hashs
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pembayaran extends Model
{
    use SoftDeletes;

    
    // Validation rules for this model
    static $rules = [
		'pemesanan_id' => 'required',
		'charge_id' => 'required',
		'status' => 'required',
		'payment_amount' => 'required',
		'payment_amount_crypto' => 'required',
		'crypto_currency' => 'required',
		'tx_hashs' => 'required',];
    
    // Number of items to be shown per page
    protected $perPage = 20;

    // Attributes that should be mass-assignable
    protected $fillable = ['pemesanan_id','charge_id','status','payment_amount','payment_amount_crypto','crypto_currency','tx_hashs'];
    
    // Attributes that are searchable
    static $searchable = ['pemesanan_id','charge_id','status','payment_amount','payment_amount_crypto','crypto_currency','tx_hashs'];
    
    
}
