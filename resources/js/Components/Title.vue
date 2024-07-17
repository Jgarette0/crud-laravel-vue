<!-- resources/js/Components/Meta.vue -->
<script setup>
const props = defineProps({
    title: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head>
        <title>{{ title }}</title>
        <link rel="icon" type="image/svg+xml" href="images/favic.png" />
    </Head>
</template>
