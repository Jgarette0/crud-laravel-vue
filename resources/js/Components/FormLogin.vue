<script setup>
import { useForm } from "@inertiajs/vue3";
import { Link } from "@inertiajs/vue3";
const form = useForm({
    email: null,
    password: null,
    remember: null,
});
//useForm from inertia js to make a reactive form instead of using 'router' from vue3
const submit = () => {
    form.post(route("login"), {
        onError: () => {
            form.reset("password", "password_confirmation");
        },
    });
};
</script>

<template>
    <form @submit.prevent="submit">
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
            label="Password"
            v-model="form.password"
        ></v-text-field>
        <div>
            <v-row class="flex justify-between place-items-start px-4">
                <!-- removes a token -->
                <v-checkbox
                    class="text-white"
                    label="Remember me"
                    v-mode="form.remember"
                ></v-checkbox>
                <p class="text-white pt-3">
                    Not yet registered?
                    <Link
                        class="text-white hover:underline"
                        :href="route('register')"
                        >register</Link
                    >
                </p>
            </v-row>
            <v-btn
                class="me-4 w-full py-4 pb-8 text-primary hover:opacity-80"
                type="submit"
                :disabled="form.processing"
            >
                submit
            </v-btn>
        </div>
    </form>
</template>
