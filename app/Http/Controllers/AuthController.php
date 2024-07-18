<?php


    namespace App\Http\Controllers;
    use App\Models\User; 
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    
    class AuthController extends Controller
    {
        public function register(Request $request) {
            //Validate
           $fields = $request->validate([
                'name' => ['required', 'max:255'],
                'email' => ['required', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed']
            ]);
    
          
            //Register
            $user = User::create($fields);
    
            //Login 
            Auth::login($user);
    
            //Redirect
            return redirect()->route('home');
        }
    
    

            public function login(Request $request): RedirectResponse
            {
                $fields = $request->validate([
                    'email' => ['required', 'email'],
                    'password' => ['required'],
                ]);
        
                if (Auth::attempt($fields)) {
                    $request->session()->regenerate();
        
                    return redirect()->intended('/Contact');
                }
        
                return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ])->onlyInput('email');
            }
        }
    