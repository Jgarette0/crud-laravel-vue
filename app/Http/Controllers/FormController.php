<?php
    namespace App\Http\Controllers;
    use App\Models\Form;
    use Illuminate\Http\Request;
    class FormController extends Controller
    {
        public function createForm(Request $request)
        {
           $fields = $request->validate([
                'email' => ['required', 'email', 'max:255', 'unique:users'],
                'company' => ['required', 'max:255'],
                'service' => ['required', 'max:255'],
                'message' => ['required', 'max:255'],
            ]);
            Form::create($fields);
            return redirect()->route('contact');
        }
    }
