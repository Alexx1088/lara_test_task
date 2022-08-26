<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{

        public function __invoke()
    {

        $data = $request->validated();

        $data['password'] = Hash::make($data['password']);

        User::firstOrCreate(['email' => $data['email']], $data);

        return redirect()->route('admin.user.index');

    }

}
