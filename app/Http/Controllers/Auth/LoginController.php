<?php


namespace App\Http\Controllers\Auth;



use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function login(Request $request)
    {
        if ($request->method() == "POST") {
            $validator = Validator::make($request->all(), $rules = [
                'email' => ['required'],
                'password' => 'required',

            ], $messages = [
                'email.required' => 'phone field is required!',
                'password.required' => 'password  is required!',
            ]);
            if ($validator->fails()) {
                flash()->error("Email or password required");
                return redirect()->back()
                    ->withErrors($validator)->with(['message' => $messages])
                    ->withInput();
            }

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                flash()->success("Authentication successful");
                $request->session()->regenerate();
                if (Auth::user()->user_type==User::CUSTOMER_TYPE){
                    return redirect()->back()->getTargetUrl();
                }

            }
            flash()->error("User not found or User not activate");
            return redirect()->route('login');
        }
        return view('auth.login');

    }
    public function register(Request $request)
    {
        if ($request->method()=="POST"){
            $validator = Validator::make($request->all(), $rules = [
                'phone' => ['required'],
                'password' => 'required',

            ], $messages = [
                'phone.required' => 'phone field is required!',
                'password.required' => 'password  is required!',
            ]);
            if ($validator->fails()) {
                flash()->error("Please fill in required fields");
                return redirect()->back()
                    ->withErrors($validator)->with(['message' => $messages])
                    ->withInput();
            }
            $user=new User();
            $user->name=$request->name;
            $user->phone=$request->phone;
            $user->parrain_id=isset($request->parrain_id)?$request->parrain_id:1;
            $user->user_type=1;
            $user->password=bcrypt($request->get('password'));
            $user->save();
            flash()->success("Registration successfully");
            return redirect()->route('login');
        }
        return view('auth.register',[

        ]);

    }
}
