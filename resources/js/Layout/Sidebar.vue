<script setup>
import { Instagram } from "lucide-vue-next";
import { Facebook } from "lucide-vue-next";
import { Dribbble } from "lucide-vue-next";
import { Star } from "lucide-vue-next";
import { Mail } from "lucide-vue-next";
import { Linkedin } from "lucide-vue-next";
import { Link } from "@inertiajs/vue3";
import { onMounted, onUnmounted, ref } from "vue";
import { Button } from "@/Components/ui/button";

const isScrolling = ref(false);
const showTitle = ref(false);
const slideLeft = ref(false);
const updateScroll = () => {
    isScrolling.value = window.scrollY > 0;
};

onMounted(() => {
    window.addEventListener("scroll", updateScroll);

    onUnmounted(() => {
        window.removeEventListener("scroll", updateScroll);
    });
});

const toggle = () => {
    showTitle.value = !showTitle.value;
    setTimeout(() => {
        slideLeft.value = !slideLeft.value;
    }, 200);
};
</script>

<template>
    <main
        class="flex flex-col place-items-center fixed left-0 right-0 top-0 transition-all duration-500 ease-in-out sm:hidden z-20 overflow-y-hidden"
    >
        <header
            class="w-full px-4 bg-secondary-accent flex justify-between items-center h-16 top-0 left-0 right-0 fixed"
            :class="{
                'bg-secondary-foreground': isScrolling,
                'bg-secondary-foregroundbg-accent': !isScrolling,
            }"
        >
            <div>
                <img class="h-8" src="images/favic.png" alt="" srcset="" />
            </div>
            <div
                @click="toggle"
                class="cursor-pointer flex flex-col items-center justify-center"
            >
                <Star
                    v-if="!showTitle"
                    :size="32"
                    class="transition-all duration-200 ease-in-out text-primary"
                    :class="{
                        'rotate-180': isScrolling,
                        '': !isScrolling,
                    }"
                />
                <Star
                    v-else
                    :size="32"
                    fill="#2563eb"
                    class="transition-all duration-200 ease-in-out text-primary"
                    :class="{
                        'rotate-180': isScrolling,
                        '': !isScrolling,
                    }"
                />
            </div>
        </header>
        <transition
            enter-active-class="transition-opacity duration-300"
            enter-from-class="opacity-0"
            enter-to-class="opacity-100"
            leave-active-class="transition-opacity duration-300"
            leave-from-class="opacity-100"
            leave-to-class="opacity-0"
        >
            <div
                v-show="showTitle"
                class="h-screen w-full bg-secondary-foreground transition-all duration-500 ease-in-out flex flex-col items-start pt-12"
            >
                <div
                    class="h-1/4 w-screen flex flex-row justify-center px-4 gap-3 place-items-end"
                >
                    <div
                        class="font-extrabold font-sans text-2xl text-primary select-none"
                    >
                        GAR TECHNOLOGY
                    </div>
                </div>
                <nav
                    class="w-screen h-screen justify-center gap-4 flex flex-col place-items-start pl-4 py-12"
                >
                    <Link
                        href="/"
                        class="block font-light font-mona text-primary text-3xl hover:opacity-85 transition-all duration-300 delay-100 ease-in-out"
                        :class="slideLeft ? 'translate-x-8' : 'translate-x-72'"
                    >
                        HOME
                    </Link>
                    <Link
                        href="/About"
                        class="block font-light font-mona text-primary text-3xl hover:opacity-85 transition-all duration-300 ease-in-out delay-200"
                        :class="slideLeft ? 'translate-x-8' : 'translate-x-72'"
                    >
                        ABOUT
                    </Link>
                    <Link
                        href="/Login"
                        class="block font-light font-mona text-primary text-3xl hover:opacity-85 transition-all duration-300 ease-in-out delay-300"
                        :class="slideLeft ? 'translate-x-8' : 'translate-x-72'"
                    >
                        LOGIN
                    </Link>
                </nav>
                <div class="h-2/3 w-screen flex flex-col justify-between">
                    <div
                        class="w-screen pl-4 flex place-items-center justify-start transition-all duration-500 ease-in-out"
                        :class="slideLeft ? 'gap-6' : 'gap-1'"
                    >
                        <a
                            class="bg-gray-300 opacity-70 rounded-lg p-3 hover:opacity-80"
                            href="http://linkedin.com"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <Linkedin class="text-primary" />
                        </a>
                        <a
                            class="bg-gray-300 opacity-70 rounded-lg p-3 hover:opacity-80"
                            href="http://facebook.com"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <Facebook class="text-primary" />
                        </a>
                        <a
                            class="bg-gray-300 opacity-70 rounded-lg p-3 hover:opacity-80"
                            href="http://instagram.com"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <Instagram class="text-primary" />
                        </a>
                        <a
                            class="bg-gray-300 opacity-70 rounded-lg p-3 hover:opacity-80"
                            href="http://dribbble.com"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <Dribbble class="text-primary" />
                        </a>
                        <a
                            class="bg-gray-300 opacity-70 rounded-lg p-3 hover:opacity-80"
                            href="mailto:gartechnology@software.com"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <Mail class="text-primary" />
                        </a>
                    </div>
                    <div class="relative px-8 mx-8 bottom-0">
                        <Link href="/Contact">
                            <Button
                                class="absolute bottom-8 left-0 right-0 text-secondary-foreground font-mona font-semibold py-6"
                            >
                                Contact Us</Button
                            >
                        </Link>
                    </div>
                </div>
            </div>
        </transition>
    </main>
</template>
