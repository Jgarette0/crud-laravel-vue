<?php
    namespace App\Http\Controllers;
    use App\Models\Form;
    use Illuminate\Http\Request;
    class FormController extends Controller
    {
        public function contact(Request $request)
        {
           $fields = $request->validate([
                'name' => ['required', 'max:255'],
                'email' => ['required', 'email', 'max:255', 'unique:users'],
                'company' => ['required', 'max:255'],
                'description' => ['required', 'max:255'],
            ]);
            Form::create($fields);
            return redirect()->route('home');
        }
        // public function update(Request $request, $id)
        // {
        //     $form = Form::findOrFail($id);
        //     $form->update($request->all());
        //     return response()->json(['message' => 'Form updated successfully'], 200);
        // }

        // public function destroy($id)
        // {
        //     $form = Form::findOrFail($id);
        //     $form->delete();
        //     return response()->json(['message' => 'Form deleted successfully'], 200);
        // }
    }
