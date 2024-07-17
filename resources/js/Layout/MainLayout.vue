<script setup>
import Header from "./Header.vue";
import Footer from "./Footer.vue";
import Sidebar from "./Sidebar.vue";
</script>

<template>
    <div class="flex flex-col w-screen overflow-hidden bg-background">
        <Header />
        <Sidebar />
        <main>
            <div class="flex flex-col">
                <slot></slot>
            </div>
        </main>
        <Footer />
    </div>
</template>
