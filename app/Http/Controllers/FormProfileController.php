<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class FormProfileController extends Controller
{
    public function edit(): Response
    {

        $forms = Form::all(['company', 'service']);
        return Inertia::render('Edit', ['forms' => $forms]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $form = Form::findOrFail($id);
        $form->update($request->only('company', 'service'));

        return Redirect::route('edit');
    }

    public function destroy($id): RedirectResponse
    {
        $form = Form::findOrFail($id);
        $form->delete();
        return Redirect::to('/');
    }
}
