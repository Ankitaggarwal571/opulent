<?php

use App\MsgApp;

if (!function_exists('btnView')) {
  function btnView($link)
  {
    return '<a  href="' . $link . '" class="btn btn-icon btn-success btn-xs mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
    <en class="la la-eye"></en></a>';
  }
}
if (!function_exists('btnApprove')) {
  function btnApprove($link)
  {
    return '<a  href="' . $link . '" class="btn btn-icon btn-success >Approve</a>';
  }
}

if (!function_exists('btnEdit')) {
  function btnEdit($link)
  {
    return '<a  href="' . $link . '" class="btn btn-icon btn-dark btn-xs mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
    <en class="la la-edit"></en></a>';
  }
}
if (!function_exists('change_yyyy_mm_dd')) {
  function change_yyyy_mm_dd($date)
  {
    return date('Y-m-d', strtotime($date));
  }
}


if (!function_exists('randomInt')) {
  function randomInt()
  {
    return date('y') . random_int(10000000, 99999999);
  }
}

if (!function_exists('btnDelete')) {
  function btnDelete($link)
  {
    return '<a  href="' . $link . '" onclick="return confirm(' . "'" .  MsgApp::ARE_YOU_SURE . "'" . ')" class="btn btn-icon btn-danger btn-xs mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
    <en class="la la-trash"></en></a>';
  }
}
