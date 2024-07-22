<script setup>
import { useForm, usePage } from "@inertiajs/vue3";
import MainLayout from "@/Layout/MainLayout.vue";
import Title from "@/Components/Title.vue";
import { ChevronDown } from "lucide-vue-next";
import { ref } from "vue";

const pageTitle = "Contact Us";
defineProps({
    status: {
        type: String,
    },
    companies: {
        type: Array,
    },
});

const { props } = usePage();

const selectedCompany = ref(props.companies[0]);

const form = useForm({
    company: selectedCompany.value.company,
    service: selectedCompany.value.service,
});

const updateUser = () => {
    form.patch(route("form.update", selectedCompany.value.id));
};

const deleteUser = () => {
    form.delete(route("form.destroy", selectedCompany.value.id));
};
</script>

<template>
    <Title :title="pageTitle" />
    <MainLayout>
        <v-container class="h-screen d-flex items-center">
            <v-row justify="center" class="">
                <v-col cols="12" md="8" lg="6">
                    <v-card
                        variant="tonal"
                        color="blue"
                        rounded="lg"
                        class="pa-8"
                        outlined
                    >
                        <v-card-title>
                            <span class="headline">Edit Company </span>
                        </v-card-title>

                        <v-card-subtitle>
                            Update your Company information below.
                        </v-card-subtitle>

                        <v-form @submit.prevent="updateUser">
                            <v-text-field
                                v-model="form.company"
                                label="Company name"
                                type="text"
                                required
                                autofocus
                                autocomplete="name"
                                outlined
                                class="mb-4"
                            />

                            <div
                                class="flex flex-col place-items-start gap-1 mb-4 relative"
                            >
                                <Label
                                    for="serviceType"
                                    class="text-right text-md"
                                >
                                    What service do you need?
                                </Label>
                                <div
                                    class="absolute bottom-3 right-2 opacity-80"
                                >
                                    <ChevronDown />
                                </div>

                                <select
                                    v-model="form.service"
                                    id="serviceType"
                                    class="py-2 text-md md:text-xl w-full border rounded-[7px] px-2 border-blue-700"
                                    placeholder="Web Development"
                                >
                                    <option value="Web Development">
                                        Web Development
                                    </option>
                                    <option value="Mobile Development">
                                        Mobile Development
                                    </option>
                                    <option value="Project Management">
                                        Project Management
                                    </option>
                                </select>
                            </div>
                            <v-btn
                                :disabled="form.processing"
                                :class="{ 'opacity-25': form.processing }"
                                type="submit"
                                class="w-full opacity-80"
                                rounded="lg"
                                variant="flat"
                                size="x-large"
                                color="blue"
                            >
                                Update
                                <span v-if="form.recentlySuccessful"
                                    >d successfully</span
                                >
                            </v-btn>
                        </v-form>

                        <v-btn
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                            @click="deleteUser"
                            class="w-full mt-4 opacity-80"
                            variant="flat"
                            size="x-large"
                            rounded="lg"
                            color="red"
                        >
                            Delete Account
                        </v-btn>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </MainLayout>
</template>
