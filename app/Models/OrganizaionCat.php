<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class OrganizaionCat extends Model
{
    use HasFactory;
    public static function saveData($name, $id = null)
    {
        $saveData = ($id) ? OrganizaionCat::where('id', $id)->first() : new OrganizaionCat;
        $saveData->name = $name;
       
        $saveData->save();
    }
}

