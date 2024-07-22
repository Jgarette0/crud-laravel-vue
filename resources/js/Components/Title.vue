<script setup>
const props = defineProps({
    title: {
        type: String,
        required: true,
    },
});
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head>
        <title>{{ title }}</title>
    </Head>
</template>
