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
        <header class="w-3/4 flex justify-center place-items-center h-20">
            <ul
                class="flex gap-1 place-items-center bg-accent py-2 px-2 rounded-full"
            >
                <Link :href="route('home')">
                    <li
                        class="font-semibold text-[16px] font-mona text-primary transition-all duration-300 ease-in-out hover:bg-blue-100 px-5 py-1 rounded-full"
                        :class="{
                            'bg-blue-100': $page.component === 'Home',
                        }"
                    >
                        Home
                    </li>
                </Link>
                <Link :href="route('about')">
                    <li
                        class="font-semibold text-[16px] font-mona text-primary transition-all duration-300 ease-in-out hover:bg-blue-100 px-5 py-1 rounded-full"
                        :class="{
                            'bg-blue-100': $page.component === 'About',
                        }"
                    >
                        About
                    </li>
                </Link>

                <div class="flex flex-row gap-1" v-if="$page.props.auth.user">
                    <Link :href="route('contact')">
                        <li
                            class="font-semibold text-[16px] font-mona text-primary transition-all duration-300 ease-in-out hover:bg-blue-100 px-5 py-1 rounded-full"
                            :class="{
                                'bg-blue-100': $page.component === 'Contact',
                            }"
                        >
                            Contact us
                        </li>
                    </Link>

                    <Link :href="route('profile.edit')">
                        <li
                            class="font-semibold text-[16px] font-mona text-primary transition-all duration-300 ease-in-out hover:bg-blue-100 px-5 py-1 rounded-full"
                            :class="{
                                'bg-blue-100': $page.component === 'profile',
                            }"
                        >
                            Profile
                        </li>
                    </Link>
                    <Link
                        href="/Logout"
                        method="post"
                        as="button"
                        type="button"
                    >
                        <li
                            class="font-semibold text-[16px] font-mona text-primary transition-all duration-300 ease-in-out hover:bg-blue-100 px-5 py-1 rounded-full"
                        >
                            Logout
                        </li>
                    </Link>
                </div>

                <div v-else class="flex flex-row gap-1">
                    <Link :href="route('login')">
                        <li
                            class="font-semibold text-[16px] font-mona text-primary transition-all duration-300 ease-in-out hover:bg-blue-100 px-5 py-1 rounded-full"
                            :class="{
                                'bg-blue-100': $page.component === 'Auth/Login',
                            }"
                        >
                            Login
                        </li>
                    </Link>
                </div>
            </ul>
        </header>
    </main>
</template>
