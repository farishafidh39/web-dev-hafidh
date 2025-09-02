<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class PemesananItem
 *
 * @property $id
 * @property $pemesanan_id
 * @property $produk_id
 * @property $jumlah
 * @property $harga
 * @property $created_by
 * @property $updated_by
 * @property $deleted_by
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PemesananItem extends Model
{
    use SoftDeletes;

    
    // Validation rules for this model
    static $rules = [
		'pemesanan_id' => 'required',
		'produk_id' => 'required',
		'jumlah' => 'required',
		'harga' => 'required',
		'created_by' => 'required',
		'updated_by' => 'required',
		'deleted_by' => 'required',];
    
    // Number of items to be shown per page
    protected $perPage = 20;

    // Attributes that should be mass-assignable
    protected $fillable = ['pemesanan_id','produk_id','jumlah','harga','created_by','updated_by','deleted_by'];
    
    // Attributes that are searchable
    static $searchable = ['pemesanan_id','produk_id','jumlah','harga','created_by','updated_by','deleted_by'];
    
    
}
