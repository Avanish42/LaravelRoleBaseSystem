<?php

namespace App\model;
use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\Traits\EntrustPermissionTrait;

class Permission extends Model
{
    //
    use EntrustPermissionTrait;


}
