<script setup>
import FormRegister from "@/Components/FormRegister.vue";
import MainLayout from "@/Layout/MainLayout.vue";
import Title from "@/Components/Title.vue";
import SectionGroup from "@/Components/ui/SectionGroup.vue";
const pageTitle = "Register Section";
</script>

<template>
    <Title :title="`${pageTitle}`" />
    <MainLayout>
        <SectionGroup class="bg-secondary-foreground md:bg-primary">
            <div class="w-1/2 mx-auto">
                <h1 class="text-white text-3xl pa-16">
                    Register a new account
                </h1>
                <FormRegister />
            </div>
        </SectionGroup>
    </MainLayout>
</template>
