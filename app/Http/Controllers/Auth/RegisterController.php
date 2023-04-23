<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Model_has_roles;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest',['except' => ['logout','showRegistrationForm','register', 'index','edit','search','destroy','update']]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
      'name'     => ['string', 'max:255'],
      'nombres'  => ['string', 'max:100'],
      'email'    => ['string', 'email', 'max:255'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nombres' => $data['nombres'],
        ]);

    }


    // A単adidos


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('auth.register_index');
    }

    /**
     * Display a listing of the resource.
     * Busqueda
     * @return \Illuminate\Http\Response
     */

    public function search(){


     $data = Model_has_roles::where('model_id',Auth::User()->id)->first();
     $val  = Role::where('id',$data->role_id)->first();

        if ($val->name === 'Soporte u Operaciones') {


        $users = User::all() ->sortBy('id');


        }else{

            $users = User::where('id',Auth::User()->id)->get();
        }


        $roles = Role::select()->get();
        $model_has_roles = Model_has_roles::select()->get();
        return view('auth.register_search',compact('users','roles','model_has_roles'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
     $data = Model_has_roles::where('model_id',Auth::User()->id)->first();
     $val  = Role::where('id',$data->role_id)->first();

        $roles = Role::select()->get();
        $model_has_roles = Model_has_roles::select()->get();
        return view("auth.register_edit", ['user' => $user],compact('roles','model_has_roles','val'));
    }


 /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Remota  $remota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validator($request->all())->validate();


    $data1 = Model_has_roles::where('model_id',Auth::User()->id)->first();
    $val  = Role::where('id',$data1->role_id)->first();

        if ($val->name <> 'Soporte u Operaciones') {

        $user->password = Hash::make($request->password);
        $user->saveOrFail();

        }else{

        $data = Model_has_roles::where('model_id',$user->id)->first();
        $role = Role::where('id',$data->role_id)->first();

        $user->username = $request->name;
        $user->email    = $request->email;
        $user->nombres  = $request->nombres;
        $user->password = Hash::make($request->password);
        $user->saveOrFail();

        $user->removeRole($role->name);
        $user->assignRole($request->name_role);
        }

    return redirect()->route("register.search")->with(["message" => "Usuario actualizado exitosamente"]);
    }


     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Remota  $remota
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        $data = Model_has_roles::where('model_id',$user->id)->first();
        $role = Role::where('id',$data->role_id)->first();

        $user->removeRole($role->name);

        $user->delete();
        return redirect()->route("register.search")->with(["message" => "Usuario eliminado"]);
    }

}
