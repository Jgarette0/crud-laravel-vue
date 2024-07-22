<script setup>
import MainLayout from "@/Layout/MainLayout.vue";
import Title from "@/Components/Title.vue";
import FormLogin from "@/Components/FormLogin.vue";
import SectionGroup from "@/Components/ui/SectionGroup.vue";
import FormLoginHeading from "../../Components/FormLoginHeading.vue";

const pageTitle = "Login";
</script>

<template>
    <Title :title="`${pageTitle}`" />
    <MainLayout>
        <SectionGroup class="bg-secondary-foreground md:bg-primary">
            <FormLoginHeading>
                <FormLogin />
            </FormLoginHeading>
        </SectionGroup>
    </MainLayout>
</template>
