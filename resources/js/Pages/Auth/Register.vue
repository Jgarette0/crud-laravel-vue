<template>
    <div>
        <div class="w-1/2 mx-auto">
            <form @submit.prevent="submit">
                <h1>Register a new account</h1>
                <div class="mb-6">
                    <label>Name</label>
                    <input
                        type="text"
                        class="border border-ring"
                        v-model="form.name"
                    />
                </div>
                <div class="mb-6">
                    <label>Email</label>
                    <input
                        type="email"
                        class="border border-ring"
                        v-model="form.email"
                    />
                </div>
                <div class="mb-6">
                    <label>Password</label>
                    <input
                        type="password"
                        class="border border-ring"
                        v-model="form.password"
                    />
                </div>
                <div class="mb-6">
                    <label>Confirm password</label>
                    <input
                        type="password"
                        class="border border-ring"
                        v-model="form.password_confirmation"
                    />
                </div>
                <div>
                    <p>
                        Already a user?
                        <a href="#">Login</a>
                    </p>
                    <button>Register</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { reactive } from "vue";

const form = reactive({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});

const submit = () => {
    console.log(form);
};
</script>

//
<!-- <template>
//     <Title :title="`${pageTitle}`" />
//     <MainLayout>
//         <SectionGroup class="bg-secondary-foreground md:bg-primary">

//         </SectionGroup>
//     </MainLayout>
// </template>

// <script setup>
// import MainLayout from "@/Layout/MainLayout.vue";
// import Title from "@/Components/Title.vue";
// import SectionGroup from "@/Components/ui/SectionGroup.vue";
// const pageTitle = "Register Section";
// </script> -->
