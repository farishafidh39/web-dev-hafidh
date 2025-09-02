<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Pemesanan
 *
 * @property $id
 * @property $konsumen_id
 * @property $total_pembelian
 * @property $status
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
class Pemesanan extends Model
{
    use SoftDeletes;

    
    // Validation rules for this model
    static $rules = [
		'konsumen_id' => 'required',
		'total_pembelian' => 'required',
		'status' => 'required',
		'created_by' => 'required',
		'updated_by' => 'required',
		'deleted_by' => 'required',];
    
    // Number of items to be shown per page
    protected $perPage = 20;

    // Attributes that should be mass-assignable
    protected $fillable = ['konsumen_id','total_pembelian','status','created_by','updated_by','deleted_by'];
    
    // Attributes that are searchable
    static $searchable = ['konsumen_id','total_pembelian','status','created_by','updated_by','deleted_by'];
    
    
}
