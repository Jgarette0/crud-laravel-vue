<script setup>
import MainLayout from "@/Layout/MainLayout.vue";
import Title from "@/Components/Title.vue";
import SectionGroup from "@/Components/ui/SectionGroup.vue";
import FormSection from "@/Components/FormSection.vue";

const pageTitle = "Contact Us";

const props = defineProps({
    forms: {
        type: Array,
    },
});
</script>

<template>
    <Title :title="pageTitle" />
    <MainLayout>
        <SectionGroup class="bg-secondary-foreground md:bg-primary">
            <FormSection />
        </SectionGroup>
        <v-sheet class="w-screen bg-white pt-28 d-flex align-center flex-col">
            <v-container
                class="text-center font-semibold text-3xl mb-8 text-blue-700"
            >
                Companies Using Our Services
            </v-container>

            <v-container>
                <v-row class="d-flex justify-center">
                    <v-col
                        v-for="company in props.forms"
                        :key="company.id"
                        cols="12"
                        sm="6"
                        md="4"
                        lg="6"
                        class="d-flex justify-center"
                    >
                        <v-card
                            class="pa-4 d-flex flex-column align-center border border-black w-[540px]"
                            outlined
                        >
                            <v-card-title class="text-h6 mb-2 text-blue-700">
                                {{ company.company }}
                            </v-card-title>
                            <v-card-subtitle class="text-body-2 text-blue-950">
                                {{ company.description }}
                            </v-card-subtitle>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-sheet>
    </MainLayout>
</template>
