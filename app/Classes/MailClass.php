<?php

namespace App\Classes;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPassword;

class MailClass extends Controller
{
  // public static $MAIL_FROM_ADDRESS = 'noreply@Opulent.co.in';
  // public static $MAIL_FROM_NAME = 'IC-BUY';
  // public static $location = 'storage/app/';

  /**  Default Mail Start  */
  public function createAccount($userId, $password)
  {
    try {
      $user = User::where('id', $userId)->first();
      Mail::send('email.createAccount', ['user' => $user, 'password'=>$password], function ($m) use ($user) {
        $m->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        $m->to($user->email)->subject('Account Create');
      });
      return 'Success';
    } catch (\Exception $ex) {
      dd($ex->getMessage());    }
  }

  



  /**  Default Mail End  */
  /**  Test Mail Start  */
  public function testMail()
  {
    try {
      $user = User::where('id', 15)->first();
      Mail::send('testMail', ['user' => $user], function ($m) use ($user) {
        $m->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        $m->to($user->email, $user->name)->subject('Test Mail via Pepipost SMTP');
      });
      return 'Success';
    } catch (\Exception $ex) {
      return 'Error';
    }
  }
  /**  Test Mail End  */
}
