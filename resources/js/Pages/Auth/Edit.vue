<script setup>
import { useForm, usePage } from "@inertiajs/vue3";
import MainLayout from "@/Layout/MainLayout.vue";
import Title from "@/Components/Title.vue";

const pageTitle = "Contact Us";
defineProps({
    status: {
        type: String,
    },
});

const user = usePage().props.auth.user;

const form = useForm({
    name: user.name,
    email: user.email,
});

const updateUser = () => {
    form.patch(route("profile.update"));
};

const deleteUser = () => {
    form.delete(route("profile.destroy"));
};
</script>

<template>
    <Title :title="pageTitle" />
    <MainLayout>
        <v-container class="h-screen d-flex items-center">
            <v-row justify="center" class="">
                <v-col cols="12" md="8" lg="6">
                    <v-card variant="tonal" color="blue" rounded="lg" class="pa-8" outlined>
                        <v-card-title>
                            <span class="headline">Edit Account</span>
                        </v-card-title>

                        <v-card-subtitle>
                            Update your account information below.
                        </v-card-subtitle>

                        <v-form @submit.prevent="updateUser">
                            <v-text-field v-model="form.name" label="Name" id="name" type="text" required autofocus
                                autocomplete="name" outlined class="mb-4" />

                            <v-text-field v-model="form.email" label="Email" id="email" type="email" required
                                autocomplete="email" outlined class="mb-4" />

                            <v-btn :disabled="form.processing" :class="{ 'opacity-25': form.processing }" type="submit"
                                class="w-full opacity-80" rounded="lg" variant="flat" size="x-large" color="blue">
                                Update
                                <span v-if="form.recentlySuccessful">d successfully</span>
                            </v-btn>
                        </v-form>

                        <v-btn :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
                            @click="deleteUser" class="w-full mt-4 opacity-80" variant="flat" size="x-large"
                            rounded="lg" color="red">
                            Delete Account
                        </v-btn>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </MainLayout>
</template>
