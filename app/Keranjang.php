<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Keranjang
 *
 * @property $id
 * @property $konsumen_id
 * @property $produk_id
 * @property $jumlah
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
class Keranjang extends Model
{
  use SoftDeletes;


  // Validation rules for this model
  static $rules = [
    'konsumen_id' => 'required',
    'produk_id' => 'required',
    'jumlah' => 'required',
    'created_by' => 'required',
    'updated_by' => 'required',
    'deleted_by' => 'required',
  ];

  // Number of items to be shown per page
  protected $perPage = 20;

  // Attributes that should be mass-assignable
  protected $fillable = ['konsumen_id', 'produk_id', 'jumlah', 'created_by', 'updated_by', 'deleted_by'];

  // Attributes that are searchable
  static $searchable = ['konsumen_id', 'produk_id', 'jumlah', 'created_by', 'updated_by', 'deleted_by'];

  public function konsumen()
  {
    return $this->hasOne(Konsumen::class, 'id', 'konsumen_id');
  }

  public function produk()
  {
    return $this->hasOne(Produk::class, 'id', 'produk_id');
  }
}
