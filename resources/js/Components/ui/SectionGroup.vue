<!-- <div
        class="h-screen flex sm:flex-row flex-col place-items-center justify-between sm:gap-2"
    >
        <slot></slot>
    </div> -->
<template>
    <div :class="computedClasses">
        <slot></slot>
    </div>
</template>

<script setup>
import { defineProps } from "vue";

const props = defineProps({
    class: { type: String, default: "" },
});

const computedClasses = `h-screen flex sm:flex-row flex-col place-items-center justify-center sm:justify-between sm:gap-2 relative ${props.class}`;
</script>
