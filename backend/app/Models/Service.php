<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    static $rules = [
      'serviceImg' => 'required',
      'name' => 'required',
      'title'=> 'required',
      'descriptionSm'=> 'required',
      'descriptionLg'=> 'required',
      'location'=> 'required',
      'email'=> 'required',
  ];




    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
      'serviceImg',
      'name',
      'title',
      'descriptionSm',
      'descriptionLg',
      'location',
      'email',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
      'email_verified_at' => 'datetime',
  ];
}
