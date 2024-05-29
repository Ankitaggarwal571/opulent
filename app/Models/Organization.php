<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    public static function saveData($dataVal, $upload_o_pan,$upload_gst_in,$upload_Aadhar, $upload_personal_pan, $id = null)
    {
        $saveData = ($id)? Organization::find($id): new Organization;
        $saveData->o_name = $dataVal->o_name;
        $saveData->o_email = $dataVal->o_email;
        $saveData->o_mobile = $dataVal->o_mobile;
        $saveData->auth_name = $dataVal->auth_name;
        $saveData->address = $dataVal->address;
        $saveData->city = $dataVal->city;
        $saveData->state = $dataVal->state;
        $saveData->zip = $dataVal->zip;
        $saveData->auth_email = $dataVal->auth_email;
        $saveData->p_mobile = $dataVal->p_mobile;
        $saveData->o_pan_no = $dataVal->o_pan_no;
        $saveData->gst_in = $dataVal->gst_in;
        $saveData->aadhar = $dataVal->aadhar;
        $saveData->pan_no = $dataVal->pan_no;
        $saveData->organization_cat = $dataVal->organization_cat;
        if($upload_o_pan):
            $saveData->upload_o_pan = $upload_o_pan;
        endif;
        if($upload_Aadhar):
            $saveData->upload_Aadhar = $upload_Aadhar;
        endif;
        if($upload_gst_in):
            $saveData->upload_gst_in = $upload_gst_in;
        endif;
        if($upload_personal_pan):
            $saveData->upload_personal_pan = $upload_personal_pan;
        endif;
        $saveData->save();
    }
}
