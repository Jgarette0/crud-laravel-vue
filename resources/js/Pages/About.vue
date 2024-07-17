<!-- resources/js/Pages/Contact.vue -->
<script setup>
import MainLayout from "@/Layout/MainLayout.vue";
import Title from "@/Components/Title.vue";
import AboutSection from "@/Components/AboutSection.vue";
import SectionGroup from "@/Components/ui/SectionGroup.vue";
import OurMission from "@/Components/OurMission.vue";
const pageTitle = "About Us";
</script>

<template>
    <Title :title="`${pageTitle}`" />
    <MainLayout>
        <OurMission />
        <SectionGroup class="flex-col-reverse bg-accent">
            <AboutSection />
        </SectionGroup>
    </MainLayout>
</template>
