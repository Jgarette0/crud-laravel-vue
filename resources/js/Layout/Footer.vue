<script setup>
import { Instagram } from "lucide-vue-next";
import { Facebook } from "lucide-vue-next";
import { Dribbble } from "lucide-vue-next";
import { Mail } from "lucide-vue-next";
import { Linkedin } from "lucide-vue-next";
</script>

<template>
    <footer>
        <div
            class="h-screen w-screen bg-secondary-foreground md:bg-accent flex flex-col place-items-center justify-center"
        >
            <div
                class="h-[65%] w-screen flex flex-col place-items-center justify-end"
            >
                <div
                    class="flex flex-col md:flex-row justify-center md:hidden place-items-center gap-3"
                >
                    <img
                        src="images/gar.png"
                        class="md:scale-100 scale-75 md:pb-12"
                        alt=""
                    />
                    <span
                        class="md:hidden flex flex-col place-items-center text-4xl font-extrabold text-primary pb-12"
                        >TECHNOLOGY</span
                    >
                </div>
                <div
                    class="flex flex-row justify-center place-content-center gap-3"
                >
                    <div class="flex flex-col justify-center">
                        <div class="h-px xl:h-[2px] w-screen bg-primary"></div>
                    </div>
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
                    <div class="flex flex-col justify-center">
                        <div class="h-px xl:h-[2px] w-screen bg-primary"></div>
                    </div>
                </div>
            </div>
            <div
                class="h-[35%] w-screen flex flex-col place-items-center justify-center gap-8"
            >
                <div
                    class="text-accent md:text-foreground text-lg md:text-2xl font-mona hidden md:flex"
                >
                    <span
                        class="hover:text-primary transition-all duration-300 ease-in-out cursor-pointer md:mx-2"
                        >All Rights Reserved</span
                    >
                    <span class="text-primary"> |</span>
                    <span
                        class="hover:text-primary transition-all duration-300 ease-in-out md:mx-2 cursor-pointer"
                    >
                        Privacy Policy</span
                    >
                    <span class="text-primary"> |</span>
                    <span
                        class="hover:text-primary transition-all duration-300 ease-in-out md:mx-2 cursor-pointer"
                        >Terms and Conditions</span
                    >
                </div>
                <div
                    class="text-accent md:text-foreground text-md md:text-2xl font-mona"
                >
                    Copyright © 2024 |<span
                        class="text-primary hover:opacity-80 cursor-pointer"
                    >
                        GAR TECHNOLOGY</span
                    >
                </div>
            </div>
        </div>
    </footer>
</template>
