<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class User
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Model
{


  // Validation rules for this model
  static $rules = [
    'name' => 'required',
    'email' => 'required',
  ];

  // Number of items to be shown per page
  protected $perPage = 20;

  // Attributes that should be mass-assignable
  protected $fillable = ['name', 'email', 'password'];

  // Attributes that are searchable
  static $searchable = ['name', 'email'];
}
