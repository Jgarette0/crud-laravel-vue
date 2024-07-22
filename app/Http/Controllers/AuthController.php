<?php


    namespace App\Http\Controllers;
    use App\Models\User;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;

    class AuthController extends Controller
    {

         public function register(Request $request)
        {
           $fields = $request->validate([
                'name' => ['required', 'max:255'],
                'email' => ['required', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed']
            ]);

            $user = User::create($fields);
            Auth::login($user);
            return redirect()->route('home');
        }

        public function login(Request $request): RedirectResponse
        {
            $fields = $request->validate
            (['email' => ['required', 'email']
            ,'password' => ['required'],]);

            if (Auth::attempt($fields, $request->remember))
            {
                $request->session()->regenerate();
                return redirect()->intended(route('contact'));
            }
            return back()->withErrors
            (['email' => 'The provided credentials do not match our records.',])
            ->onlyInput('email');
        }

        public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('home');
        }
    }
