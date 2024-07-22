<script setup>
import { useForm, usePage } from "@inertiajs/vue3";

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
    <form @submit.prevent="updateUser">
        <input
            id="name"
            type="text"
            v-model="form.name"
            required
            autofocus
            autocomplete="name"
        />
        <input
            id="email"
            type="email"
            v-model="form.email"
            required
            autofocus
            autocomplete="email"
        />
        <button
            :disabled="form.processing"
            :class="{ 'opacity-25': form.processing }"
            class="bg-gray-300 py-2 px-5"
        >
            update
        </button>
        <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">
            Saved.
        </p>
    </form>

    <button
        class="bg-red-400 py-2 px-5"
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
        @click="deleteUser"
    >
        Delete Account
    </button>
</template>
