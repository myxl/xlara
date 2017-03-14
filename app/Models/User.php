<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\Traits\EntrustUserTrait;
class User extends Model
{
    use EntrustUserTrait;
    //
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'users';
}
