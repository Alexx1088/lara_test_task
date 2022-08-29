<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreRequest;
use App\Http\Requests\Api\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param LoginRequest $request
     * @param User $user
     * @return void
     */
    public function index(LoginRequest $request, User $user)
    {
      //  dd(2222);
      $data = $request->validated();

        dd($data);

        $login_email = $data['email'];

        $users = User::all();

        foreach ($users as $user) {
            if ($user->email === $login_email) {

                $logged_user = $user->status;

                if ($logged_user == 1) {

                    return view('user.edit', compact('user'));
                }
                if ($logged_user == 2) {
                    $users = User::all();

                    $deleted_users = User::onlyTrashed()->get();

                    return view('admin.user.index', compact('users', 'deleted_users'));
                } else {
                    return view('user.notlogin');
                }
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param LoginRequest $request
     * @param User $user
     * @return void
     */
    public function store(LoginRequest $request, User $user)
    {
    /* $data = $request->validated();

       $data['password'] = Hash::make($data['password']);
           User::firstOrCreate(['email' => $data['email']], $data);
       return redirect()->route('admin.user.index');*/
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
