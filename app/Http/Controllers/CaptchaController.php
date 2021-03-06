<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    public function create()
    {
        return view('captchacreate');
    }
    public function captchaValidate(Request $request)
    {
        $request->validate([
            'captcha' => 'required|captcha'
        ]);
    }
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img('flat')]);
    }
}
