<script setup>
import { Link } from "@inertiajs/vue3";
import { onMounted, onUnmounted, ref } from "vue";
const showTitle = ref(false);
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

const toggle = () => {
    showTitle.value = !showTitle.value;
};
</script>

<template>
    <main
        class="flex-col place-items-center left-0 right-0 top-0 transition-all duration-500 ease-in-out sm:flex hidden fixed z-50"
        :class="{
            'bg-accent': isScrolling,
            'bg-transparent': !isScrolling,
        }"
    >
        <header class="w-3/4 flex justify-between place-items-center h-20">
            <div class="flex gap-4">
                <div @click="toggle" class="cursor-pointer">
                    <img src="images/favic.png" class="h-12 hover:opacity-90" />
                </div>
                <transition
                    enter-active-class="transition-opacity duration-300"
                    enter-from-class="opacity-0"
                    enter-to-class="opacity-100"
                    leave-active-class="transition-opacity duration-300"
                    leave-from-class="opacity-100"
                    leave-to-class="opacity-0"
                >
                    <span
                        class="font-extrabold font-sans text-4xl text-primary duration-300 transition-all ease-in-out"
                        v-show="showTitle"
                        >GARETTE TECHNOLOGY CO.</span
                    >
                </transition>
            </div>
            <ul
                class="flex gap-3 place-items-center bg-accent py-2 px-2 rounded-full"
            >
                <Link :href="route('home')"
                    ><li
                        class="font-semibold text-[16px] font-mona text-primary transition-all duration-300 ease-in-out hover:bg-blue-100 px-5 py-3 rounded-full"
                    >
                        Home
                    </li>
                </Link>
                <Link :href="route('about')"
                    ><li
                        class="font-semibold text-[16px] font-mona text-primary transition-all duration-300 ease-in-out hover:bg-blue-100 px-5 py-3 rounded-full"
                    >
                        About
                    </li></Link
                >
                <Link :href="route('contact')"
                    ><li
                        class="font-semibold text-[16px] font-mona text-primary transition-all duration-300 ease-in-out hover:bg-blue-100 px-5 py-3 rounded-full"
                    >
                        Contact us
                    </li></Link
                >
                <span v-if="$page.props.auth.user">
                    <Link href="/Logout" method="post" as="button" type="button"
                        ><li
                            class="font-semibold text-[16px] font-mona text-center px-6 py-3 bg-primary text-accent rounded-full hover:opacity-90"
                        >
                            Logout
                        </li></Link
                    >
                </span>

                <div v-else class="flex flex-row gap-3">
                    <Link :href="route('register')"
                        ><li
                            class="font-semibold text-[16px] font-mona text-center px-6 py-3 bg-primary text-accent rounded-full hover:opacity-90"
                        >
                            Register
                        </li></Link
                    >
                    <Link :href="route('login')"
                        ><li
                            class="font-semibold text-[16px] font-mona text-center px-6 py-3 bg-primary text-accent rounded-full hover:opacity-90"
                        >
                            Login
                        </li></Link
                    >
                </div>
            </ul>
        </header>
    </main>
</template>
