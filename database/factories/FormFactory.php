<?php

namespace Database\Factories;

use App\Models\Form;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Form::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Define an array of roles
        $roles = [
            'Software Engineer',
            'Mobile Developer',
            'Web Developer',
            'Project Management'
        ];

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'company' => $this->faker->company,
            'description' => $this->faker->randomElement($roles), 
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
    //this is from chat gpt
    // public function update(Request $request, $id)
    // {
    //     $fields = $request->validate([
    //         'name' => ['required', 'max:255'],
    //         'email' => ['required', 'email', 'max:255'],
    //         'company' => ['required', 'max:255'],
    //         'description' => ['required', 'max:255'],
    //     ]);

    //     $form = Form::findOrFail($id);
    //     $form->update($fields);

    //     return redirect()->route('contact');
    // }

    // //this is from chat gpt
    // public function destroy($id)
    // {
    //     $form = Form::findOrFail($id);
    //     $form->delete();

    //     return redirect()->route('contact');
    // }
}
