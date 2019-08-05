<?php

namespace App\Http\Controllers\Auth;

use App\Brand;
use App\BrandUser;
use App\Type;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;

class BrandRegisterController extends Controller
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
    protected $redirectTo = '/brandHome';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return view('auth.brands.pre-register');
    }

    //to store pre reg data
    public function storeBrand(Request $request){

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'type' => 'required',
            'description' => 'required',
        ]);

        $tId = $request->type;
        $t = Type::where('id', $tId)->get()->first();
        $sc = $t->subcategory_id;
        $c = $t->subcategory->category_id;

        $u = new Brand;

        $u->name = $request->name;
        $u->website = $request->website;
        $u->contact = $request->contact;
        $u->description = $request->description;
        $u->is_reg = 1;        
        $u->type_id = $tId;
        $u->subcategory_id = $sc;
        $u->category_id = $c;

        $u->save();

        $bId = $u->id;

        return view('auth.brands.register')->with('bId', $bId);
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $bu = new BrandUser;
        $bu->email = $request->email;
        $bu->password = Hash::make($request->password);
        $bu->brand_id = $request->bId;

        $bu->save();

        return(redirect('/brandHome'));

    }
}
