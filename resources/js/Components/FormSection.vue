<script setup>
import { Card } from "@/Components/ui/card";
import { Label } from "@/Components/ui/label";
import { Input } from "@/Components/ui/input";
import { Textarea } from "@/Components/ui/textarea";
import { Button } from "@/Components/ui/button";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    name: null,
    email: null,
    company: null,
    description: null,
});

const submit = () => {
    form.post(route("contact"));
};
</script>
<template>
    <div
        class="flex flex-col text-5xl md:text-7xl text-accent md:w-1/2 place-items-center md:place-items-start pr-32 px-4 md:px-16 justify-center pb-8 md:justify-center snap-y snap-mandatory snap-start tracking-tight h-[40%] md:h-full"
    >
        Let’s Talk About Your Next Big Project
    </div>

    <form
        @submit.prevent="submit"
        class="flex flex-col px-4 w-full md:px-0 md:w-1/2 justify-between md:pt-32 pb-4 md:h-full h-[60%]"
    >
        <Card
            class="md:w-5/6 py-8 w-full bg-accent flex flex-col justify-around h-full rounded-[1.2rem]"
        >
            <div
                class="w-full flex place-items-center font-semibold text-3xl justify-center gap-4"
            >
                Welcome
                <span class="text-blue-700 font-bold text-4xl uppercase">{{
                    $page.props.auth.user.name
                }}</span>
            </div>
            <div class="flex flex-col gap-4 p-4 md:p-12 w-full">
                <div class="flex flex-col place-items-start gap-1">
                    <Label for="name" class="text-right text-md md:text-xl">
                        Name
                    </Label>
                    <Input
                        :value="$page.props.auth.user.name"
                        :placeholder="$page.props.auth.user.name"
                        id="name"
                        class="py-3 md:py-6 text-md md:text-xl"
                        v-model="form.name"
                    />
                </div>
                <div class="flex flex-col place-items-start gap-1">
                    <Label for="username" class="text-right text-md md:text-xl">
                        Email
                    </Label>
                    <Input
                        v-model="form.email"
                        :value="$page.props.auth.user.email"
                        :placeholder="$page.props.auth.user.email"
                        id="username"
                        class="py-1 md:py-6 text-md md:text-xl"
                    />
                </div>
                <div class="flex flex-col place-items-start gap-1">
                    <Label for="username" class="text-right text-md md:text-xl">
                        Company name
                    </Label>
                    <Input
                        v-model="form.company"
                        id="username"
                        class="py-1 md:py-6 text-md md:text-xl"
                    />
                </div>
                <div class="flex flex-col place-items-start gap-1">
                    <Label
                        for="serviceType"
                        class="text-right text-md md:text-xl"
                    >
                        What service do you need?
                    </Label>
                    <div class="relative w-full">
                        <div class="absolute bottom-2 right-4">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-chevron-down"
                            >
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </div>
                        <select
                            v-model="form.description"
                            id="serviceType"
                            class="py-1 md:py-6 text-md md:text-xl w-full px-2 rounded-[10px] border relative"
                        >
                            <option value="Web Development">
                                Web Development
                            </option>
                            <option class="px-2" value="Mobile Development">
                                Mobile Development
                            </option>
                            <option class="px-2" value="Project Management">
                                Project Management
                            </option>
                            <option class="px-2" value="" disabled selected>
                                Select a service
                            </option>
                        </select>
                    </div>
                </div>
                <Button
                    class="group px-5 md:px-6 text-lg md:text-2xl rounded-full py-3 md:py-7 sm:flex font-mona bg-primary text-accent"
                    type="submit"
                    :disabled="form.processing"
                    >Submit
                </Button>
            </div></Card
        >
    </form>
</template>
