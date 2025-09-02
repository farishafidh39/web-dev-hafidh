<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Produk
 *
 * @property $id
 * @property $nama_produk
 * @property $harga
 * @property $jumlah_tersedia
 * @property $gambar_produk
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
class Produk extends Model
{
    use SoftDeletes;

    
    // Validation rules for this model
    static $rules = [
		'nama_produk' => 'required',
		'harga' => 'required',
		'jumlah_tersedia' => 'required',
		'gambar_produk' => 'required',
		'created_by' => 'required',
		'updated_by' => 'required',
		'deleted_by' => 'required',];
    
    // Number of items to be shown per page
    protected $perPage = 20;

    // Attributes that should be mass-assignable
    protected $fillable = ['nama_produk','harga','jumlah_tersedia','gambar_produk','created_by','updated_by','deleted_by'];
    
    // Attributes that are searchable
    static $searchable = ['nama_produk','harga','jumlah_tersedia','gambar_produk','created_by','updated_by','deleted_by'];
    
    
}
