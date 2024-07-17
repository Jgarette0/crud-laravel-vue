<template>
    <Title :title="`${pageTitle}`" />
    <MainLayout>
        <SectionGroup>
            <BannerMessage />
            <BannerImage />
        </SectionGroup>
        <SectionGroup class="flex-col-reverse bg-accent">
            <AboutSection />
        </SectionGroup>
        <ServiceSection />
        <ContactUs />
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layout/MainLayout.vue";
import Title from "@/Components/Title.vue";
import BannerMessage from "@/Components/BannerMessage.vue";
import BannerImage from "@/Components/BannerImage.vue";
import AboutSection from "@/Components/AboutSection.vue";
import SectionGroup from "@/Components/ui/SectionGroup.vue";
import ServiceSection from "@/Components/ServiceSection.vue";
import ContactUs from "@/Components/ContactUs.vue";
const pageTitle = " Welcome";
</script>
