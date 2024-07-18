<script setup>
import FormRegister from "@/Components/FormRegister.vue";
import MainLayout from "@/Layout/MainLayout.vue";
import Title from "@/Components/Title.vue";
import SectionGroup from "@/Components/ui/SectionGroup.vue";
import RegisterFormHeading from "../../Components/RegisterFormHeading.vue";
const pageTitle = "Register Section";
</script>

<template>
    <Title :title="`${pageTitle}`" />
    <MainLayout>
        <SectionGroup class="bg-secondary-foreground md:bg-primary">
            <RegisterFormHeading>
                <FormRegister />
            </RegisterFormHeading>
        </SectionGroup>
    </MainLayout>
</template>
