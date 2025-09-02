<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Konsumen
 *
 * @property $id
 * @property $nama_konsumen
 * @property $email
 * @property $no_hp
 * @property $jenis_kelamin
 * @property $alamat
 * @property $foto
 * @property $user_id
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
class Konsumen extends Model
{
    use SoftDeletes;

    
    // Validation rules for this model
    static $rules = [
		'nama_konsumen' => 'required',
		'email' => 'required',
		'no_hp' => 'required',
		'jenis_kelamin' => 'required',
		'alamat' => 'required',
		'foto' => 'required',
		'user_id' => 'required',
		'created_by' => 'required',
		'updated_by' => 'required',
		'deleted_by' => 'required',];
    
    // Number of items to be shown per page
    protected $perPage = 20;

    // Attributes that should be mass-assignable
    protected $fillable = ['nama_konsumen','email','no_hp','jenis_kelamin','alamat','foto','user_id','created_by','updated_by','deleted_by'];
    
    // Attributes that are searchable
    static $searchable = ['nama_konsumen','email','no_hp','jenis_kelamin','alamat','foto','user_id','created_by','updated_by','deleted_by'];
    
    
}
