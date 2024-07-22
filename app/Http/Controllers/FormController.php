<?php
    namespace App\Http\Controllers;
    use App\Models\Form;
    use Illuminate\Http\Request;
    class FormController extends Controller
    {
        public function createForm(Request $request)
        {
            $fields = $request->validate([
                'email' => [ 'email', 'max:255'],
                'company' => [ 'max:255'],
                'service' => [ 'max:255'],
                'message' => ['max:255'],
            ]);

            Form::create($fields);
            return redirect()->route('contact');
        }
    }
