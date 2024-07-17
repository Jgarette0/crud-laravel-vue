<!-- resources/js/Pages/Contact.vue -->
<script setup>
import MainLayout from "@/Layout/MainLayout.vue";
import Title from "@/Components/Title.vue";
import SectionGroup from "@/Components/ui/SectionGroup.vue";
import FormSection from "@/Components/FormSection.vue";

const pageTitle = "Contact Us";
</script>

<template>
    <Title :title="`${pageTitle}`" />
    <MainLayout>
        <SectionGroup class="bg-secondary-foreground md:bg-primary">
            <FormSection />
        </SectionGroup>
    </MainLayout>
</template>
