<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class KategoriProduk
 *
 * @property $id
 * @property $nama_kategori
 * @property $keterangan
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
class KategoriProduk extends Model
{
    use SoftDeletes;

    
    // Validation rules for this model
    static $rules = [
		'nama_kategori' => 'required',
		'keterangan' => 'required',
		'created_by' => 'required',
		'updated_by' => 'required',
		'deleted_by' => 'required',];
    
    // Number of items to be shown per page
    protected $perPage = 20;

    // Attributes that should be mass-assignable
    protected $fillable = ['nama_kategori','keterangan','created_by','updated_by','deleted_by'];
    
    // Attributes that are searchable
    static $searchable = ['nama_kategori','keterangan','created_by','updated_by','deleted_by'];
    
    
}
