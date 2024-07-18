<?php


    namespace App\Http\Controllers;
    use App\Models\User;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;

    class AuthController extends Controller
    {

        //Function that handles registration
        public function register(Request $request)
        {//Validate
           $fields = $request->validate([
                'name' => ['required', 'max:255'],
                'email' => ['required', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed']
            ]);

            $user = User::create($fields); //Register and Create to database
            Auth::login($user);            //Login
            return redirect()->route('home');//Redirect to home page
        }

        //Function that handles Login
        public function login(Request $request): RedirectResponse
        {
            $fields = $request->validate
            (['email' => ['required', 'email']
            ,'password' => ['required'],]);
            // $request->remember - will remember and stores a token?
            if (Auth::attempt($fields, $request->remember))
            {
                $request->session()->regenerate();
                return redirect()->intended('/Contact');
            }
            return back()->withErrors
            (['email' => 'The provided credentials do not match our records.',])
            ->onlyInput('email');
        }

        //Function that handles Logout
        public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('home');
        }
    }
