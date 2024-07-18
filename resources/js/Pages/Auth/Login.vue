<script setup>
import MainLayout from "@/Layout/MainLayout.vue";
import Title from "@/Components/Title.vue";
import SectionGroup from "@/Components/ui/SectionGroup.vue";
const pageTitle = "Register Section";
import { Link } from "@inertiajs/vue3";
import { useForm } from "@inertiajs/vue3";
const form = useForm({
    email: null,
    password: null,
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
    <Title :title="`${pageTitle}`" />
    <MainLayout>
        <SectionGroup class="bg-secondary-foreground md:bg-primary">
            <div class="w-1/2 mx-auto">
                <h1 class="text-white text-3xl pa-16">Login to your account</h1>

                <form @submit.prevent="submit">
                    <small class="text-red-400">{{ form.errors.email }}</small>
                    <v-text-field
                        class="text-white"
                        label="E-mail"
                        type="text"
                        v-model="form.email"
                    ></v-text-field>

                    <small class="text-red-400">{{
                        form.errors.password
                    }}</small>
                    <v-text-field
                        class="text-white"
                        type="password"
                        v-model="form.password"
                    ></v-text-field>

                    <div>
                        <p class="text-white">
                            Not yet registered?
                            <Link
                                class="text-white hover:underline"
                                :href="route('register')"
                                >register</Link
                            >
                        </p>
                        <v-btn
                            class="me-4"
                            type="submit"
                            :disabled="form.processing"
                        >
                            submit
                        </v-btn>
                    </div>
                </form>
            </div>
        </SectionGroup>
    </MainLayout>
</template>
