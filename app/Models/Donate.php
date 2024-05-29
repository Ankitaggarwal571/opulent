<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    use HasFactory;

    public static function saveData($dataVal,  $id = null)
    {
      $saveData = ($id)? Donate::find($id): new Donate;
      $saveData->donator_id = Donate::getUserId();
      $saveData->organization_name = $dataVal->organization_name;
      $saveData->save();
      return $saveData;
      
    }

    public static function getUserId()
    {
        return floor(time() - 999999999);
    }

    public static function updateData($dataVal, $id)
    {
        $update = Donate::where('donator_id',$id)->first();
        $update->fname = $dataVal->fname;
        $update->lname = $dataVal->lname;
        $update->phone = $dataVal->phone;
        $update->email = $dataVal->email;
        $update->state = $dataVal->state;
        $update->city = $dataVal->city;
        $update->zip = $dataVal->zip;
        $update->address = $dataVal->address;
        $update->country = $dataVal->country;
        $update->save();
        return $update;
    }
    public static function updateDonateData($dataVal, $id)
    {
        $update = Donate::where('donator_id',$id)->first();
        $update->payment_method = $dataVal->payment_method;
        $update->amount = $dataVal->amount;
        $update->save();
        return $update;
    }
}
