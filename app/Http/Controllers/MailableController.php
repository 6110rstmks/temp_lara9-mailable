<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;                   //追記
use App\Mail\ContactReply; //追記
use Illuminate\Support\Facades\Log;


class MailableController extends Controller
{
    public function index() //コンタクトフォームの表示
    {
        return view('contact.index');
    }

    public function send(Request $request)  //メールの自動送信設定
    {
        // 認証コードの生成
        $token = rand(1111, 9999);

        // 送信先のメールアドレス
        // $to_mail_address = $request->only(['email'])['email'];
        $to_mail_address = $request->input('email');
        Log::debug($to_mail_address);

        Mail::to($to_mail_address)
              ->send(new ContactReply($token));

        return back()->with('email', $to_mail_address);
    }
}
