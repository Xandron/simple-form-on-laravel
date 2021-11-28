<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show()
    {
        return view('main');
    }

    public function create(Request $request) {
        $request->validate([
            'user_name' => 'max:255',
            'user_mail' => 'email',
            'user_message' => 'max:255',
        ]);

        $userName = $request->user_name ?? null;
        $email = $request->user_mail ?? null;
        $userMessage = $request->user_message ?? null;

        $userData = new UserData();

        $userData->user_name = $userName;
        $userData->email = $email;
        $userData->user_message = $userMessage;

        $userData->save();

        return back();
    }
}
