<?php

use Illuminate\Database\Eloquent\Model;

/**
 *
 * Article Model
 *
*/

class UsersConfig extends Model
{

	public $timestamps = false;
	protected $guarded = ['uid','password','safe_int','tswt','daan'];
}