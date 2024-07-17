<script setup>
import { Button } from "@/Components/ui/button";
import { ref, onMounted, onUnmounted } from "vue";
import { ArrowDownRight } from "lucide-vue-next";

const isScrolling = ref(false);

const updateScroll = () => {
    isScrolling.value = window.scrollY > 0;
};

onMounted(() => {
    window.addEventListener("scroll", updateScroll);

    onUnmounted(() => {
        window.removeEventListener("scroll", updateScroll);
    });
});

onMounted(() => {
    document.querySelectorAll(".scroll-link").forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();

            const targetId = this.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({ behavior: "smooth" });
            }
        });
    });
});
</script>

<template>
    <div
        class="flex flex-col place-items-start justify-end sm:justify-center h-2/3 w-full px-4 sm:pl-6 overflow-hidden gap-4 md:gap-0 md:h-screen transition-transform duration-300 ease-in-out xl:scale-115 xl:translate-x-20 xl:translate-y-20"
    >
        <div
            class="text-5xl sm:text-7xl md:text-7xl xl:text-[105px] font-extrabold text-foreground opacity-90 transition-all duration-300 ease-in-out"
        >
            Realize Your
            <span
                class="transition-all duration-500 ease-in-out"
                :class="{
                    'text-primary': isScrolling,
                    'text-primary': !isScrolling,
                }"
                >Software</span
            >
            Vision
        </div>
        <div
            class="flex items-center gap-2 flex-row flex-wrap leading-tight md:mt-4"
        >
            <a
                href="#webdevelopment"
                class="scroll-link hover:opacity-80 cursor-pointer"
                >Web Development</a
            >
            <div
                class="w-px h-6 transition-all ease-in-out duration-300"
                :class="{
                    'bg-primary rotate-12': isScrolling,
                    'bg-foreground': !isScrolling,
                }"
            ></div>
            <a
                href="#mobiledevelopment"
                class="scroll-link hover:opacity- cursor-pointer"
                >Mobile Development</a
            >
            <div
                class="w-px h-6 transition-all ease-in-out duration-300"
                :class="{
                    'bg-primary rotate-12': isScrolling,
                    'bg-foreground': !isScrolling,
                }"
            ></div>
            <a
                href="#projectmanagement"
                class="scroll-link hover:opacity-80 cursor-pointer"
                >Project Management</a
            >
        </div>
        <div class="mt-10 w-screen">
            <Button
                class="group px-5 md:px-6 text-lg md:text-2xl font-thin rounded-full py-5 md:py-7 hover:opacity-85 sm:flex"
                variant="outline"
                :class="{
                    'bg-primary text-accent border-none': isScrolling,
                    '': !isScrolling,
                }"
                >Let's Talk
                <ArrowDownRight
                    width="40"
                    height="40"
                    stroke-width="1.5"
                    class="px-2 transform group-hover:-rotate-45 transition-all duration-500 ease-in-out group-hover:text-primary"
                    :class="{
                        'text-white': isScrolling,
                        'text-primary': !isScrolling,
                    }"
            /></Button>
        </div>
    </div>
</template>
