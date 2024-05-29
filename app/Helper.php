<?php

use App\Models\Department;
use App\Models\Designation;
use App\MsgApp;
use App\Models\Variant;
use App\Models\Product;
use App\Models\User;
use Spatie\Permission\Models\Role;

if (!function_exists('getWhereIn')) {
  function getWhereIn($data)
  {
    $return = array();
    foreach ($data as $val) :
      $return[] = $val->dataId;
    endforeach;
    return $return;
  }
}
if (!function_exists('randomInt')) {
  function randomInt()
  {
    return date('y') . random_int(10000000, 99999999);
  }
}
if (!function_exists('userType')) {
  function userType()
  {
    return json_decode(MsgApp::USER_TYPE);
  }
}
if (!function_exists('dynamicSelect')) {
  function dynamicSelect($value, $name, $select='')
  {
    return '<option value="' . $value . '" ' .$select .'>' . $name . '</option>';
  }
}

if (!function_exists('dateFormate')) {
  function dateFormate($date)
  {
    return date('d-m-Y', strtotime($date));
  }
}



if (!function_exists('bladeDepartmentGetNameById')) {
  function bladeDepartmentGetNameById($id)
  {
      return Department::getName($id);
  }
}





if (!function_exists('productById')) {
  function productById($id)
  {
      $product = Product::find($id);
      return ($product)?$product->name:Null;
  }


  if (!function_exists('gstVal')) {
    function gstVal($taxableValue, $tax)
    {
      $gst = $total = 0; 
      $tax100 = 1+($tax/100);
      $total = round(($taxableValue/$tax100), 2);
      $gst = round($taxableValue - $total, 2);
      return compact('gst', 'total');
    }
  }
}


if (!function_exists('getUserUrl')) {
  function getUserUrl()
  {
    if (auth()->user()->user_type == 'Admin'){
      return '/admin';
    } elseif (auth()->user()->user_type == 'Super Admin'){
      return '/superadmin';
    } else {
      return '/';
    }
  }
}



if (!function_exists('change_yyyy_mm_dd')) {
    function change_yyyy_mm_dd($date)
    {
      return date('d-m-Y', strtotime($date));
    }
}