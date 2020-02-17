<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestCaptcha;

class indexController extends Controller
{
    public function mainpage ()
    {
        return view('index');
    }
    public function process (Request $request)
    {
        $request->validate([
            'captcha' => 'required|captcha'
        ]);
        $model = new TestCaptcha;
        $model->captcha = $request->captcha;
        $model->save();
        return redirect()->back()->with('status', 'Captcha working sucessfully!');

    }
}
