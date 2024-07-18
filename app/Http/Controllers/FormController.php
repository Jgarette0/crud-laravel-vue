<?php


    namespace App\Http\Controllers;
    use App\Models\Form;
    use Illuminate\Http\Request;

    class FormController extends Controller
    {

        //Function that handles registration
        public function contact(Request $request)
        {//Validate
           $fields = $request->validate([
                'name' => ['required', 'max:255'],
                'email' => ['required', 'email', 'max:255', 'unique:users'],
                'company' => ['required', 'max:255'],
                'description' => ['required', 'max:255'],
            ]);

            Form::create($fields); //Create the data to database

            return redirect()->route('home');//Redirect to home page
        }


    }
