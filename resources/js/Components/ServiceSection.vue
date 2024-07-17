<script setup>
import { Card } from "@/Components/ui/card";
import { CardHeader } from "@/Components/ui/card";
import { CardTitle } from "@/Components/ui/card";
import { CardContent } from "@/Components/ui/card";
import { CardFooter } from "@/Components/ui/card";
import { Button } from "@/Components/ui/button";
import { ArrowDownRight } from "lucide-vue-next";
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import { useIntersectionObserver } from "@vueuse/core";

const target = ref(null);
const isVisible = ref(false);

const { stop } = useIntersectionObserver(target, ([{ isIntersecting }]) => {
    setTimeout(() => {
        isVisible.value = isIntersecting;
    }, 500);
});
</script>
<template>
    <div
        ref="target"
        class="flex flex-col place-items-center gap-8 w-screen px-2 md:px-8 py-12 md:py-20"
    >
        <div class="text-lg sm:text-xl mb-8 font-mona text-foreground">
            OUR SERVICES
        </div>
        <Card
            class="bg-primary w-full rounded-xl md:rounded-[2rem] md:h-[28rem] flex px-2 md:px-12 place-items-center justify-center md:flex-row flex-col transition-all duration-300 ease-in z-10"
            id="webdevelopment"
            :class="{
                '-rotate-[5deg] hover:-rotate-[1deg] ': isVisible,
                '': !isVisible,
            }"
        >
            <div class="md:h-[25rem] overflow-hidden w-full md:w-[35%]">
                <img
                    src="images/Searching.png"
                    alt=""
                    class="md:h-[120%] md:-translate-y-8"
                    srcset=""
                />
            </div>
            <div
                class="md:h-[25rem] w-full md:w-[65%] flex flex-col justify-center"
            >
                <CardHeader>
                    <CardTitle
                        class="text-white font-mona font-semibold text-4xl"
                        >Web Development</CardTitle
                    >
                </CardHeader>
                <CardContent class="text-accent font-mona text-lg md:text-xl">
                    Using the newest technologies, both on the back-end and the
                    front-end side, lets us create scalable, real-time, and
                    efficient solutions that definitely will move your business
                    to the next level!
                </CardContent>
                <CardFooter>
                    <Link href="/About">
                        <Button
                            class="group px-5 md:px-6 text-lg md:text-2xl font-thin rounded-full py-5 md:py-7 hover:opacity-85 sm:flex"
                            variant="outline"
                            :class="{
                                'bg-primary text-accent border-none':
                                    isScrolling,
                                '': !isScrolling,
                            }"
                            >Learn more
                            <ArrowDownRight
                                width="40"
                                height="40"
                                stroke-width="1.5"
                                class="px-2 transform group-hover:-rotate-45 transition-all duration-300 ease-in-out group-hover:text-primary"
                                :class="{
                                    'text-white ': isScrolling,
                                    'text-primary': !isScrolling,
                                }"
                        /></Button>
                    </Link>
                </CardFooter>
            </div>
        </Card>
        <Card
            id="mobiledevelopment"
            class="bg-primary w-full rounded-xl md:rounded-[2rem] md:h-[28rem] flex px-2 md:px-12 place-items-center justify-center md:flex-row-reverse flex-col transition-all duration-300 z-8 ease-in hover:z-15"
            :class="{
                'rotate-[5deg] hover:rotate-[1deg]': isVisible,
                '': !isVisible,
            }"
        >
            <div class="md:h-[25rem] overflow-hidden w-full md:w-[35%]">
                <img
                    src="images/Upload-photo.png"
                    alt=""
                    class="md:h-[120%] md:-translate-y-8 scale-[.85]"
                    srcset=""
                />
            </div>
            <div
                class="md:h-[25rem] w-full md:w-[65%] flex flex-col justify-center"
            >
                <CardHeader>
                    <CardTitle
                        class="text-white font-mona font-semibold text-4xl flex justify-center w-full"
                        >Mobile development</CardTitle
                    >
                </CardHeader>
                <CardContent class="text-accent font-mona text-xl">
                    We specialize in bringing our client's ideas to life. Our
                    brilliant mobile teams take pride in tackling the most
                    difficult challenges and bringing them to life on Android
                    and iOS devices.
                </CardContent>
                <CardFooter class="w-full flex justify-end">
                    <Link href="/About">
                        <Button
                            class="group px-5 md:px-6 text-lg md:text-2xl font-thin rounded-full py-5 md:py-7 hover:opacity-85 sm:flex"
                            variant="outline"
                            :class="{
                                'bg-primary text-accent border-none':
                                    isScrolling,
                                '': !isScrolling,
                            }"
                            >Learn more
                            <ArrowDownRight
                                width="40"
                                height="40"
                                stroke-width="1.5"
                                class="px-2 transform group-hover:-rotate-45 transition-all duration-300 ease-in-out group-hover:text-primary"
                                :class="{
                                    'text-white ': isScrolling,
                                    'text-primary': !isScrolling,
                                }"
                        /></Button> </Link
                ></CardFooter>
            </div>
        </Card>
        <Card
            id="projectmanagement"
            class="bg-primary w-full rounded-xl md:rounded-[2rem] md:h-[28rem] flex px-2 md:px-12 place-items-center justify-center md:flex-row flex-col transition-all duration-300 delay-[5000ms] ease-in"
            :class="{
                '-rotate-[5deg] hover:-rotate-[1deg] ': isVisible,
                '': !isVisible,
            }"
        >
            <div class="md:h-[25rem] overflow-hidden w-full md:w-[35%]">
                <img
                    src="images/Project-planning.png"
                    alt=""
                    class="md:h-[120%] md:-translate-y-8"
                    srcset=""
                />
            </div>
            <div
                class="md:h-[25rem] w-full md:w-[65%] flex flex-col justify-center"
            >
                <CardHeader>
                    <CardTitle
                        class="text-white font-mona font-semibold text-4xl"
                        >Project Management</CardTitle
                    >
                </CardHeader>
                <CardContent class="text-accent font-mona text-xl">
                    Our project management team ensures seamless execution of
                    software projects. Using agile methodologies, we drive
                    efficiency, adaptability, and collaboration to deliver
                    projects on time and within budget.
                </CardContent>
                <CardFooter>
                    <Link href="/About">
                        <Button
                            class="group px-5 md:px-6 text-lg md:text-2xl font-thin rounded-full py-5 md:py-7 hover:opacity-85 sm:flex"
                            variant="outline"
                            :class="{
                                'bg-primary text-accent border-none':
                                    isScrolling,
                                '': !isScrolling,
                            }"
                            >Learn more
                            <ArrowDownRight
                                width="40"
                                height="40"
                                stroke-width="1.5"
                                class="px-2 transform group-hover:-rotate-45 transition-all duration-300 ease-in-out group-hover:text-primary"
                                :class="{
                                    'text-white ': isScrolling,
                                    'text-primary': !isScrolling,
                                }" /></Button></Link
                ></CardFooter>
            </div>
        </Card>
    </div>
</template>
