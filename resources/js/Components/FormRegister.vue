<script setup>
import { Link } from "@inertiajs/vue3";
import { useForm } from "@inertiajs/vue3";
const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});
//useForm from inertia js to make a reactive form instead of using 'router' from vue3
const submit = () => {
    form.post(route("register"), {
        onError: () => {
            form.reset("password", "password_confirmation");
        },
    });
};
</script>
<template>
    <form @submit.prevent="submit">
        <small class="text-red-400">{{ form.errors.name }}</small>
        <v-text-field
            class="text-white"
            label="Name"
            type="text"
            v-model="form.name"
        ></v-text-field>

        <small class="text-red-400">{{ form.errors.email }}</small>
        <v-text-field
            class="text-white"
            label="E-mail"
            type="text"
            v-model="form.email"
        ></v-text-field>

        <small class="text-red-400">{{ form.errors.password }}</small>
        <v-text-field
            class="text-white"
            type="password"
            v-model="form.password"
        ></v-text-field>

        <v-text-field
            class="text-white"
            type="password"
            v-model="form.password_confirmation"
        ></v-text-field>

        <div>
            <p class="text-white">
                Already a user?
                <Link class="text-white hover:underline" :href="route('login')"
                    >Login</Link
                >
            </p>
            <v-btn class="me-4" type="submit" :disabled="form.processing">
                submit
            </v-btn>
        </div>
    </form>
</template>
